<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anggota;
use App\User;


class anggotaController extends Controller
{
    public function index()
    {
         $anggotas = User::role('anggota')->get();

        return view('users.anggota.index', compact('anggotas'));
    }


}
