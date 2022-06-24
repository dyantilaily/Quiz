<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class UserController extends Controller
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
        return view('signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_email' => 'required|unique:tb_users',
            'user_password' => 'required',
            'user_nama' => 'required',
            'user_alamat' => 'required',
            'user_hp' => 'required',
            'user_pos' => 'required',
            'user_role' => 'required',
            'user_aktif' => 'required'
        ]);

        $request->session()->flash('success', 'Data Berhasil Ditambah');
        User::create($validatedData);

        return redirect('/register');
    }

    public function login(Request $request)
    {
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}