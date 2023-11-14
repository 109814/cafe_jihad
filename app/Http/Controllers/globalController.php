<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class globalController extends Controller
{
    public function index() {
        // return view('blank');
        return view('auth.global');
    }
    public function kelolauser(){
        // mengambil field role dari tabel role lihat models user baris 64
        $kelolauser = User::with('role')->get();
        // $kelolauser = User::all();

        return view('auth.global', compact('kelolauser'));
    }
}

