<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterDataItemController extends Controller
{
    public function index(){
        return Inertia::render('MasterData/Item/index');
    }

    public function create(){
        $titlePage = 'Master Data Item';

        return Inertia::render('MasterData/Item/create',[
            'titlePage' => $titlePage
        ]);
    }

    public function edit(){
        $titlePage = 'Master Data Item';

        return Inertia::render('MasterData/Item/edit',[
            'titlePage' => $titlePage
        ]);
    }
}
