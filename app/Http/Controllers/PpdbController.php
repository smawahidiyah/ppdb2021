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
        return view('ppdb.close');
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
        }elseif ($updatedata) {
            toastr()->success('Data berhasil diperbarui');
            return redirect('/datapd');
        }
    }

    public function show($id)
    {
        $ppdbs = Ppdb::where('id', $id)->get();
        $ppdbs->map(function($katalumnni){
            if ($katalumnni->kategorialumni == 0) {
                return $katalumnni->kategorialumni = 'Bukan Alumni';
            }elseif($katalumnni->kategorialumni == 1){
                return $katalumnni->kategorialumni = 'Alumni SMP Wahidiyah';
            }
        });
        $ppdbs->map(function($tempattinggal){
            if ($tempattinggal->tempattinggal == 0) {
                return $tempattinggal->tempattinggal = 'Bersama Orang Tua';
            }elseif($tempattinggal->tempattinggal == 1){
                return $tempattinggal->tempattinggal = 'Asrama / Pondok Pesantren';
            }
        });
        $ppdbs->map(function($otpersonil){
            if ($otpersonil->katorgtuapersonil == 0) {
                return $otpersonil->katorgtuapersonil = 'Bukan Personil';
            }elseif($otpersonil->katorgtuapersonil == 1){
                return $otpersonil->katorgtuapersonil = 'Personil 5 s.d. 10 Tahun';
            }else{
                return $otpersonil->katorgtuapersonil = 'Personil lebih dari 10 Tahun';
            }
        });
        return view('panel.app.show')->with('ppdbs', $ppdbs);
    }

    public function biaya($nisnpd)
    {
        $nisn = DB::table('ppdbs')->where('nisnpd', $nisnpd)->get();
        $pondok = $nisn->map(function($pondok){
            if ($pondok->tempattinggal == 0) {
                return $pondok = '0';
            }elseif ($pondok->tempattinggal == 1) {
                return $pondok = '832500';
            }
        });

        $alumni = $nisn->map(function($alumni){
            if ($alumni->kategorialumni == 0) {
                return $alumni = '650000';
            }elseif ($alumni->kategorialumni == 1) {
                return $alumni = '325000';
            }
        });

        ddd($alumni);
    }

    public function delete($id)
    {
        $ppdbs = Ppdb::find($id);
        $delete = $ppdbs->delete();
        if ($delete) {
            toastr()->error('Data berhasil dihapus');
            return redirect('/datapd');
        }
    }

}
