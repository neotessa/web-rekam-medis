<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterDataClientController extends Controller
{
    public function index(){
        $currentPage = 'Master Data Client';

        return Inertia::render('MasterData/Client/index');
    }
}
