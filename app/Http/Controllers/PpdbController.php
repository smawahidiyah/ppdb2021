<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Ppdb;

class PpdbController extends Controller
{
    public function register()
    {
    	return view('ppdb.registrasi');
    }

    public function postregister(Request $request)
    {
    	$request->validate([
    		'namapd' => 'required',
    		'kelaminpd' => 'required',
    		'nisnpd' => 'required|max:10|min:10|numeric|unique:ppdb',
    		'nikpd' => 'required|max:16|min:16|numeric|uniqueppdb',
    		'tempatlahirpd' => 'required',
    		'tanggallahirpd' => 'required',
    		'namaayah' => 'required',
    		'namaibu' => 'required',
    		'namawali' => 'required',
    	])
    }
}
