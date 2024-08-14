<?php

namespace App\Http\Controllers\Penjadwalan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AntrianController extends Controller
{
    public function index(){
        $titlePage = 'Antrian';

        return Inertia::render('Penjadwalan/Antrian/index',[
            'titlePage' => $titlePage
        ]);
    }

    public function create() {
        $titlePage = 'Antrian - Tambah Data';

        return Inertia::render('Penjadwalan/Antrian/Create', [
            'titlePage' => $titlePage
        ]);
    }
}
