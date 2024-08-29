<?php

namespace App\Http\Controllers\Penjadwalan;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class AntrianController extends Controller
{
    /**
     * Fetch the data for the index table and get the correlated eloquent relationships
     */
    public function index(Request $request)
    {
        // Set the title and get the correlated tables for livesearch, status filtering and for fetching the data to the table view
        $search = $request->input('search');
        $status = $request->input('status');

        $titlePage = 'Antrian';

        // make a search feature
        $query = Reservation::with(['client', 'patient', 'doctor', 'nurse', 'created_by'])
        ->latest('id') // sort by id in descending order (newest first)
        ->when($search, function ($q) use ($search) {
            $q->where('status', 'like', "%{$search}%")
                ->orWhereHas('client', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('patient', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('doctor', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('nurse', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('created_by', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
        })
        ->when($status, function ($q) use ($status) {
            $q->where('status', $status);
        });

        // Paginate the result
        $reservations = $query->paginate(10);

        return Inertia::render('Penjadwalan/Antrian/Terjadwal/index',[
            'titlePage' => $titlePage,
            'reservations' => $reservations
        ]);
    }

    /**
     * antrian/create route to view the form
     */
    public function create()
    {
        // Get all the Models correlated for the fetching in select form tag
        $doctors = User::where('role', '2')->get(); // Assuming role 2 is Doctor
        $nurses = User::where('role', '3')->get(); // Assuming role 3 is Nurse
        $clients = Client::all();
        $patients = Patient::all();

        $titlePage = 'Antrian - Tambah Data';

        return Inertia::render('Penjadwalan/Antrian/Create', [
            'doctors' => $doctors,
            'nurses' => $nurses,
            'clients' => $clients,
            'patients' => $patients,
            'titlePage' => $titlePage
        ]);
    }

    /**
     *  antrian/store route to insert the data
     */
    public function store(Request $request)
    {
        // Validate all the required data before storing
        $validated = $request->validate([
            'reservation_date' => 'required|date',
            'status'           => 'required|integer|in:1,2,3',
            'service'          => 'required|integer|in:1,2,3,4',
            'doctor_id'        => 'required|exists:users,id',
            'nurse_id'         => 'required|exists:users,id',
            'created_by'       => 'required|exists:users,id',
            'client_id'        => 'required|exists:clients,id',
            'patient_id'       => 'required|exists:patients,id',
        ]);

        // Pass all the validated data
        $data = [
            'reservation_date' => $validated['reservation_date'],
            'service' => $validated['service'],
            'status' => $validated['status'],
            'doctor_id' => $validated['doctor_id'],
            'nurse_id' => $validated['nurse_id'],
            'created_by' => $validated['created_by'],
            'client_id' => $validated['client_id'],
            'patient_id' => $validated['patient_id'],
        ];

        // Store all the validated data
        Reservation::create($data);

        return redirect()->route('antrian')->with('message', 'Antrian berhasil ditambahkan.');
    }

    /**
     * antrian/update to get the form view for update data
     */
    public function update($id)
    {
        // Get the reservation data and correlated models
        $reservation = Reservation::findOrFail($id);
        $doctors = User::where('role', '2')->get(); // Assuming role 2 is Doctor
        $nurses = User::where('role', '3')->get(); // Assuming role 3 is Nurse
        $clients = Client::all();
        $patients = Patient::all();

        $titlePage = 'Antrian - Edit Data';

        return Inertia::render('Penjadwalan/Antrian/Create', [
            'reservation' => $reservation,
            'doctors' => $doctors,
            'nurses' => $nurses,
            'clients' => $clients,
            'patients' => $patients,
            'titlePage' => $titlePage
        ]);
    }

    /**
     * antrian/edit to reach the edit methods
     */
    public function edit(Request $request, $id)
    {
        // Validate the data
        $validated = $request->validate([
            'reservation_date' => 'required|date',
            'status'           => 'required|integer|in:1,2,3',
            'service'          => 'required|integer|in:1,2,3,4',
            'doctor_id'        => 'required|exists:users,id',
            'nurse_id'         => 'required|exists:users,id',
            'client_id'        => 'required|exists:clients,id',
            'patient_id'       => 'required|exists:patients,id',
        ]);

        // Find the reservation and update it
        $reservation = Reservation::findOrFail($id);
        $reservation->update($validated);

        return redirect()->route('antrian')->with('message', 'Antrian berhasil diperbarui.');
    }

    /**
     * antrian/delete to delete the data
     */
    public function destroy($id)
    {
        // Find the reservation and delete it
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('antrian')->with('message', 'Antrian berhasil dihapus.');
    }
}
