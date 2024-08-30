<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        $titlePage = 'Dashboard';

        return Inertia::render('Dashboard/dashboard',[
            'titlePage' => $titlePage
        ]);
    }
}
