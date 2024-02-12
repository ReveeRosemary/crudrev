<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', ['dosen'=> $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama_dosen' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
        ], [
            'nidn.required' => 'NIDN Wajib Diisi',
            'nama_dosen.required' => 'Nama Dosen Wajib Diisi',
            'jeniskelamin.required' => 'Jenis Kelamin Wajib Diisi',
            'alamat.required' => 'Alamat Dosen Wajib Diisi',
            'usia.required' => 'Usia Dosen Wajib Diisi',
            
        ]);

        $data = [
            'nidn' => $request->input('nidn'),
            'nama_dosen' => $request->input('nama_dosen'),
            'jeniskelamin' => $request->input('jeniskelamin'),
            'alamat' => $request->input('alamat'),
            'usia' => $request->input('usia'),
        ];
        Dosen::create($data);
        return redirect('dosen')->with('success', 'Dosen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Dosen::where('nidn',$id)->first();
        return view('dosen.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_dosen' => 'required',
        ]);

        $data = [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
        ];

        Dosen::where('nidn',$id)->update($data);
        return redirect('dosen')->with('success', 'Datamu Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Dosen::where('nidn',$id)->delete();
        return redirect('dosen')->with('success', 'Datamu Berhasil Dihapus');
    }
}
 