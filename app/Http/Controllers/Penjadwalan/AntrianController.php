<?php

namespace App\Http\Controllers\Penjadwalan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Client;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AntrianController extends Controller
{
    /**
     * Fetch the data for the index table and get the correlated eloquent relationships
     */
    public function index(){
        $titlePage = 'Antrian > Terjadwal';
        $bookings = Booking::with(['user', 'client', 'patient'])->latest()->paginate();

        return Inertia::render('Penjadwalan/Antrian/Terjadwal/index',[
            'titlePage' => $titlePage,
            'bookings'  => $bookings
        ]);
    }

    /**
     * antrian/create route to view the form
     */

    public function create() {

        // Get all the Models correlated for the fetching in select form tag
        $doctors = User::where('role', '1')->get();
        $nurses = User::where('role', '2')->get();
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
     *  antrian/create route to insert the data
     */

    public function store(Request $request) {

        // Validate all the inputs
        $validated = $request->validate([
            'booking_date'  => 'required|date',
            'status'        => 'required|integer|in:1,2,3',
            'service'       => 'required|integer|in:1,2',
            'user_id'       => 'required|exists:users,id',
            'client_id'     => 'required|exists:clients,id',
            'patient_id'    => 'required|exists:patients,id',
        ]);

        Booking::create($validated);

        return redirect()->route('penjadwalan/antrian')->with('success', 'Antrian berhasil ditambahkan.');
    }

    public function memulai(){
        $titlePage = 'Antrian > Memulai';
        $bookings = Booking::with(['user', 'client', 'patient'])->latest()->paginate();

        return Inertia::render('Penjadwalan/Antrian/Memulai/index',[
            'titlePage' => $titlePage,
            'bookings'  => $bookings
        ]);
    }

    public function selesai(){
        $titlePage = 'Antrian > Selesai';
        $bookings = Booking::with(['user', 'client', 'patient'])->latest()->paginate();

        return Inertia::render('Penjadwalan/Antrian/Selesai/index',[
            'titlePage' => $titlePage,
            'bookings'  => $bookings
        ]);
    }

    public function inpatient(){
        $titlePage = 'Antrian > Rawat Inap';

        return Inertia::render('Penjadwalan/Antrian/Inpatient/index',[
            'titlePage' => $titlePage,
        ]);
    }

    public function outpatient(){
        $titlePage = 'Antrian > Rawat Jalan';

        return Inertia::render('Penjadwalan/Antrian/Outpatient/index',[
            'titlePage' => $titlePage,
        ]);
    }
}
