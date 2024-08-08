<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterDataClientController extends Controller
{
    public function index(){

        return Inertia::render('MasterData/Client/index');
    }

    public function create(){
        $currentPage = 'Master Data Client';

        return Inertia::render('MasterData/Client/create',[
            'currentPage' => $currentPage
        ]);
    }
}
