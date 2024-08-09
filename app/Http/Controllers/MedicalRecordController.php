<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MedicalRecordController extends Controller
{
    public function index(){
        $titlePage = 'Rekam Medis';

        return Inertia::render('MedicalRecord/index',[
            'titlePage' => $titlePage
        ]);
    }

    public function detail(){
        $currentPage = 'Detail Pasien';

        return Inertia::render('MedicalRecord/detail',[
            'currentPage' => $currentPage
        ]);
    }
}
