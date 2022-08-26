<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = User::role(['ketua','bendahara'])->get();

        return view('users.pegawai.index', compact('pegawais'));
    }




}
