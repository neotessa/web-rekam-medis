<?php

namespace App\Http\Controllers\Penjadwalan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CalenderController extends Controller
{
    public function index(){
        $titlePage = 'Kalender';

        return Inertia::render('Penjadwalan/Calender/index',[
            'titlePage' => $titlePage
        ]);
    }
}
