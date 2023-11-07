<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class kelolamenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = menu::all();
        return view('auth.global', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.laporan.kelola_menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'jenis' => 'required|in:makanan,minuman',
        ]);
        // ini logika unutk ketika user mengisi from menu di tabel name sudah automatis terisi user yang sedang login
        $loggedInUser = Auth::user();
        Menu::create([
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'jenis' => $request->input('jenis'),
            // ini yang mengisinya
            'name' => $loggedInUser->name,
        ]);
        return redirect()->route('kelolamenu');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
