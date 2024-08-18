<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Doctor;
use App\Models\ImageMedicalRecord;
use App\Models\Inpatient;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\MedicalRecord;
use App\Models\Outpatient;
use App\Models\Patient;
use App\Models\Reservation;
use App\Models\UserRole;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create UserRoles
        $adminRole = UserRole::create(['role' => 'admin']);
        $doctorRole = UserRole::create(['role' => 'doctor']);

        // Create Users, Admins, and Doctors
        for ($i = 0; $i < 5; $i++) {
            $user = User::create([
                'name' => "Admin User $i",
                'email' => "admin$i@example.com",
                'password' => bcrypt('password'),
                'role' => $adminRole->id,
            ]);
            Admin::create([
                'user_id' => $user->id,
                'date_of_birth' => '1980-01-01',
                'gender' => 'male',
                'phone_number' => '1234567890',
                'address' => '123 Main St',
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => "Doctor User $i",
                'email' => "doctor$i@example.com",
                'password' => bcrypt('password'),
                'role' => $doctorRole->id,
            ]);
            Doctor::create([
                'user_id' => $user->id,
                'date_of_birth' => '1980-01-01',
                'gender' => 'male',
                'phone_number' => '1234567890',
                'address' => '123 Main St',
                'specialization' => 'General Practice',
            ]);
        }

        // Create Clients
        for ($i = 0; $i < 20; $i++) {
            Client::create([
                'name' => "Client $i",
                'gender' => 'female',
                'phone_number' => '0987654321',
                'address' => '456 Elm St',
            ]);
        }

        // Create Patients
        for ($i = 0; $i < 30; $i++) {
            Patient::create([
                'name' => "Patient $i",
                'species' => 'Dog',
                'breed' => 'Labrador',
                'color' => 'Yellow',
                'age' => rand(1, 10),
                'gender' => 'male',
                'sterilized' => true,
                'vaccination_history' => 'Up-to-date',
                'health_history' => 'Healthy',
                'notes' => 'No special notes',
                'photo' => 'patient.jpg',
            ]);
        }

        // Create ItemCategories and Items
        for ($i = 0; $i < 5; $i++) {
            $category = ItemCategory::create([
                'name' => "Category $i",
            ]);

            for ($j = 0; $j < 5; $j++) {
                Item::create([
                    'item_category_id' => $category->id,
                    'name' => "Item $j in Category $i",
                    'price_per_item' => rand(10, 100),
                    'stock' => rand(0, 50),
                    'detail' => 'Item details here',
                ]);
            }
        }

        // Create MedicalRecords and ImageMedicalRecords
        for ($i = 0; $i < 50; $i++) {
            $medicalRecord = MedicalRecord::create([
                'patient_id' => Patient::inRandomOrder()->first()->id,
                'temperature' => rand(36, 39),
                'weight' => rand(5, 40),
                'blood_sugar' => rand(80, 120),
                'blood_pressure' => '120/80',
                'heart_rate' => rand(60, 100),
                'saturation' => rand(95, 100),
                'respiratory_rate' => rand(12, 20),
                'notes' => 'Record notes',
                'special_treatment' => 'None',
                'medication' => 'None',
                'date' => now(),
            ]);

            for ($j = 0; $j < rand(0, 3); $j++) {
                ImageMedicalRecord::create([
                    'medical_record_id' => $medicalRecord->id,
                    'photo' => 'image'.$j.'.jpg',
                    'description' => 'Image description',
                ]);
            }
        }

        // Create Inpatients
        for ($i = 0; $i < 15; $i++) {
            Inpatient::create([
                'start_date' => now()->subDays(rand(1, 10)),
                'end_date' => now()->addDays(rand(1, 10)),
                'reason' => 'Routine check',
                'diagnosis' => 'Healthy',
                'treatment' => 'None',
                'note' => 'Patient is stable',
                'status' => rand(0, 1),// 'in treatment' : 'discharged'
                'patient_id' => Patient::inRandomOrder()->first()->id,
                'doctor_id' => User::where('role', $doctorRole->id)->inRandomOrder()->first()->id,
            ]);
        }

        // Create Outpatients
        for ($i = 0; $i < 25; $i++) {
            Outpatient::create([
                'visit_date' => now()->subDays(rand(1, 10)),
                'complaint_date' => now()->subDays(rand(1, 10)),
                'complaint_issue' => 'Routine check',
                'diagnosis' => 'Healthy',
                'treatment' => 'None',
                'prescription' => 'None',
                'status' => rand(0, 1), // 'completed'  'follow-up',
                'patient_id' => Patient::inRandomOrder()->first()->id,
                'doctor_id' => User::where('role', $doctorRole->id)->inRandomOrder()->first()->id,
            ]);
        }

        // Create Invoices and InvoiceItems
        for ($i = 0; $i < 40; $i++) {
            $invoice = Invoice::create([
                'invoice_number' => 'INV-'.str_pad($i, 5, '0', STR_PAD_LEFT),
                'date' => now(),
                'total' => rand(100, 1000),
                'payment' => rand(50, 500),
                'notes' => 'Invoice notes',
                'payment_method' => rand(0, 1), // 'cash' : 'credit card'
                'status' => rand(0, 3), // 'unpaid' : 'paid'
                'patient_id' => Patient::inRandomOrder()->first()->id,
            ]);

            for ($j = 0; $j < rand(1, 5); $j++) {
                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'item_category_id' => ItemCategory::inRandomOrder()->first()->id,
                    'description' => 'Item description',
                    'quantity' => rand(1, 10),
                    'price_per_item' => rand(10, 100),
                    'total' => rand(10, 1000),
                    'status' => rand(0, 1),
                ]);
            }
        }

        // Create Reservations
        for ($i = 0; $i < 30; $i++) {
            Reservation::create([
                'reservation_date' => now()->addDays(rand(1, 10)),
                'status' => rand(0, 1), // 'pending' : 'confirmed'
                'service_name' => 'Check-up',
                'doctor_user_id' => User::where('role', $doctorRole->id)->inRandomOrder()->first()->id,
                'admin_user_id' => User::where('role', $adminRole->id)->inRandomOrder()->first()->id,
                'client_id' => Client::inRandomOrder()->first()->id,
                'patient_id' => Patient::inRandomOrder()->first()->id,
            ]);
        }
    }
}
