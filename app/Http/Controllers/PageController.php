<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\Jurusan;
use App\Ruangan;
use App\Barang;

class PageController extends Controller
{
    public function dashboard(){
    	$totalfakultas = Fakultas::count();
    	$totaljurusan = Jurusan::count();
    	$totalruangan = Ruangan::count();
    	$totalbarang = Barang::count();
        return view('dashboard', compact('totalfakultas', 'totaljurusan', 'totalruangan', 'totalbarang'));
    }

    public function login(){
        return view('authentication.login');
    }

    public function register(){
        return view('authentication.register');
    }
}
