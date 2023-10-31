<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class kelolamenuController extends Controller
{
    public function index(): View
    {
        return view('auth.laporan.kelola_menu');
    }

}
