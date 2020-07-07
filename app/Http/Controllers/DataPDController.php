<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppdb;
use DataTables;

class DataPDController extends Controller
{
    public function indexpd()
    {
        $ppdbs = Ppdb::count('namapd');
        $countL = Ppdb::where('kelaminpd', 'L')->count();
        $countP = Ppdb::where('kelaminpd', 'P')->count();
        return view('panel.app.indexpd', ['ppdbs'=>$ppdbs])->with('countL', $countL)->with('countP', $countP);
    }

    public function getdatapd()
    {
        $ppdb = Ppdb::select(['id', 'namapd', 'nisnpd', 'kelaminpd', 'tempatlahirpd', 'tanggallahirpd']);

        return DataTables::eloquent($ppdb)
        ->addIndexColumn()
        ->addColumn('action', function ($ppdb) {
            return '<div class="btn-group" role="group" aria-label="Basic example">
                      <a href="'.route('show', $ppdb->id).'" type="button" class="btn btn-md btn-primary">Lihat</a>
                      <a href="'.route('edit', $ppdb->id).'" type="button" class="btn btn-md btn-success">Edit</a>
                      <a href="" type="button" class="btn btn-md btn-danger" data-toggle="modal" onclick="deleteUser">hapus</a>
                        <div class="modal-body">
                        <h5 class="modal-title">Konfirmasi hapus</h5>
                        </div>
                        <div class="modal-footer">

                        <form method="POST" class="d-inline" id="deleteUserForm">
                                @method('GET')
                                @csrf
                        <button type="submit" class="btn btn-lg btn-success delete" style="font-size:12px">
                        <strong>YES</strong>
                        </button>

                        </form>
                        </div>
                    </div>';
        })
        ->toJson();
    }
}
