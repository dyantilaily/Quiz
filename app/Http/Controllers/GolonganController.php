<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $rows = Golongan::all();
        return view('golongan.index', ['rows' => $rows]);
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function edit($id)
    {
        $golongan = Golongan::find($id);
        return view('golongan.edit', ['golongan' => $golongan]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gol_nama' => 'required',
            'gol_kode' => 'required|unique:tb_golongan'
        ]);
        
        $request->session()->flash('success', 'Data Berhasil Ditambah');
        Golongan::create($validatedData);

        return redirect('/golongan/create');
    }

    public function update(Request $request, $id)
    {
        $golongan = Golongan::find($id);
        $golongan->gol_nama = $request->input('gol_nama');
        $golongan->update();

        return redirect('/golongan')->with('status','Data Berhasil Diubah');
            
    }

    public function destroy($id)
    {
        $golongan = Golongan::find($id);
        $golongan->delete();

        return redirect('/golongan')->with('status','Data Berhasil Diubah');
    }
}
