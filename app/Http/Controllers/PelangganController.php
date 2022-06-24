<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
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
        $rows = Pelanggan::all();
        return view('pelanggan.index', ['rows' => $rows]);
    }

    public function create()
    {
        $golongans = DB::select('select gol_nama, id from tb_golongan');
        $users = DB::select('select user_nama, id from tb_users');
        return view('pelanggan.create',['golongans' => $golongans, 'users' => $users]);
    }

    public function edit($id)
    {
        $golongans = DB::select('select gol_nama, id from tb_golongan');
        $users = DB::select('select user_nama, id from tb_users');
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', ['golongans' => $golongans, 'users' => $users, 'pelanggan' => $pelanggan]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pel_nama' => 'required',
            'pel_ktp' => 'required',
            'pel_alamat' => 'required',
            'pel_hp' => 'required',
            'pel_no' => 'required|unique:tb_pelanggan',
            'pel_id_gol' => 'required',
            'pel_seri' => 'required',
            'pel_aktif' => 'required',
            'pel_meteran' => 'required',
            'pel_id_user' => 'required'
        ]);

        $request->session()->flash('success', 'Data Berhasil Ditambah');
        Pelanggan::create($validatedData);

        return redirect('/pelanggan/create');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'gol_nama' => 'required'
        ]);
        
        $request->session()->flash('success', 'Data Berhasil Diubah');
        Pelanggan::create($validatedData);

        return redirect('/pelanggan/edit');
    }  
}
