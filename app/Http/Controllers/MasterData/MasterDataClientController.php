<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterDataClientController extends Controller
{
    public function index(){
        $titlePage = 'Master Data Client';

        return Inertia::render('MasterData/Client/index',[
            'titlePage' => $titlePage
        ]);
    }

    public function create(){
        $titlePage = 'Master Data Client';

        return Inertia::render('MasterData/Client/create',[
            'titlePage' => $titlePage
        ]);
    }

    public function store(){

    }

    public function edit(){
        $titlePage = 'Master Data edit Client';

        return Inertia::render('MasterData/Client/edit',[
            'titlePage' => $titlePage
        ]);
    }
}
