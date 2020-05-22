<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Ppdb;

class PpdbController extends Controller
{
    public function index()
    {
        return view('ppdb.index');
    }


    public function register()
    {
    	return view('ppdb.registrasi');
    }

    public function postregister(Request $request)
    {
    	$validated = $request->validate([
    		'namapd' => 'required',
    		'kelaminpd' => 'required',
    		'nisnpd' => 'required|max:10|min:10|unique:ppdbs',
    		'nikpd' => 'required|max:16|min:16|unique:ppdbs',
    		'tempatlahirpd' => 'required',
    		'tanggallahirpd' => 'required',
    		'namaayah' => 'required',
    		'namaibu' => 'required',
    	]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }else{
            Ppdb::create($request->all());
            return redirect('/sukses');
        }
    }

    public function sukses()
    {
        return view('ppdb.sukses');
    }
}
