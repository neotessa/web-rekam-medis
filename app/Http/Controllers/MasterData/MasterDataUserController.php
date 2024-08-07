<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterDataUserController extends Controller
{
    public function index(){
        return Inertia::render('MasterData/User/index');
    }
}
