<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

    	$validated = Validator::make($request->all(), [
    		'namapd' => 'required',
    		'kelaminpd' => 'required',
    		'nisnpd' => 'required|max:10|min:10|unique:ppdbs',
    		'nikpd' => 'required|max:16|min:16|unique:ppdbs',
    		'tempatlahirpd' => 'required',
    		'tanggallahirpd' => 'required',
    		'namaayah' => 'required',
    		'namaibu' => 'required',
    	], [
            'nisnpd.unique' => 'NISN yang digunakan telah terdaftar!',
            'nikpd.unique' => 'NIK yang digunakan telah terdaftar!',
            'nikpd.max' => 'NIK yang digunakan tidak boleh lebih dari 16 digit',
            'nikpd.min' => 'NIK yang digunakan tidak boleh kurang dari 16 digit',
            'nisnpd.max' => 'NISN yang digunakan tidak boleh lebih dari 10 digit',
            'nisnpd.min' => 'NISN yang digunakan tidak boleh kurang dari 10 digit'
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

    public function formcek()
    {
        return view('ppdb.formcek');
    }

    public function postcek(Request $request)
    {
        $ppdbs = $request->all();
        $cek = DB::table('ppdbs')->where('nisnpd', $ppdbs['nisnpd'])->exists();
        if (DB::table('ppdbs')->where('nisnpd', $ppdbs['nisnpd'])->exists()== TRUE) {
            $ppdbs = DB::table('ppdbs')->select('nisnpd', 'namapd', 'tempatlahirpd', 'tanggallahirpd')->where('nisnpd', $ppdbs['nisnpd'] )->get();
            return view('ppdb.hasilcek')->with('ppdbs', $ppdbs)->with('cek', $cek);
        }else{
            return view('ppdb.hasilcek')->with('cek', $cek);
        }
    }

    public function updatepd(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'namapd' => 'required',
            'kelaminpd' => 'required',
            'nisnpd' => 'required|max:10|min:10',
            'nikpd' => 'required|max:16|min:16',
            'tempatlahirpd' => 'required',
            'tanggallahirpd' => 'required',
            'namaayah' => 'required',
            'namaibu' => 'required',
        ], [
            'nikpd.max' => 'NIK yang digunakan tidak boleh lebih dari 16 digit',
            'nikpd.min' => 'NIK yang digunakan tidak boleh kurang dari 16 digit',
            'nisnpd.max' => 'NISN yang digunakan tidak boleh lebih dari 10 digit',
            'nisnpd.min' => 'NISN yang digunakan tidak boleh kurang dari 10 digit'
        ]);
        $updatedata = Ppdb::where('id', $id)->update($request->except(['_method', '_token']));
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }elseif (($updatedata)== 1) {
            return redirect()->back()->with('updatedata', 'berhasil diperbarui');
        }
    }
}
