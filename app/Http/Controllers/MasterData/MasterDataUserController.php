<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterDataUserController extends Controller
{
    public function index(){
        $titlePage = 'Master Data Client';

        return Inertia::render('MasterData/User/index',[
            'titlePage' => $titlePage,
            'users' => User::with(['role','profile','doctor','admin'])->latest()->paginate()
        ]);
    }

    public function create(){
        $titlePage = 'Master Data Client';

        return Inertia::render('MasterData/User/create',[
            'titlePage' => $titlePage
        ]);
    }
}
