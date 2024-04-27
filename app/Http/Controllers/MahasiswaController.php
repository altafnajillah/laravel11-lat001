<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('welcome', ['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}