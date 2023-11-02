<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class globalController extends Controller
{
    public function index() {
        // return view('blank');
        return view('auth.global');
    }
}
