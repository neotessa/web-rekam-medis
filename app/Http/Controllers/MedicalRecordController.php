<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MedicalRecordController extends Controller
{
    public function index(){
        $currentPage = 'Rekam Medis';

        return Inertia::render('MedicalRecord/index',[
            'currentPage' => $currentPage
        ]);
    }

    public function detail(){
        $currentPage = 'Detail Pasien';

        return Inertia::render('MedicalRecord/detail',[
            'currentPage' => $currentPage
        ]);
    }
}
