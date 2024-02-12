<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', ['guru'=> $guru]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required',
            'Nama_Guru' => 'required',
            'Alamat_Guru' => 'required',
            'Jenis_Kelamin' => 'required',
            'Pendidikan_Guru' => 'required',
        ]);
        guru::create([
            'NIP' =>$request->NIP,
            'Nama_Guru' =>$request->Nama_Guru,
            'Alamat_Guru' =>$request->Alamat_Guru,
            'Jenis_Kelamin' =>$request->Jenis_Kelamin,
            'Pendidikan_Guru' =>$request->Pendidikan_Guru,
        ]);

        return redirect('guru')->with('success', 'Datamu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = guru::where($id, 'NIP', 'Nama_Guru', 'Alamat_Guru', 'Jenis_Kelamin', 'Pendidikan_Guru')->first();
        return view('guru.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        guru::where('NIP',$id)->delete();
        return redirect('guru')->with('success', 'Datamu Berhasil Dihapus');
    }
}
