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
        return view('panel.app.indexpd', ['ppdbs'=>$ppdbs]);
    }

    public function getdatapd()
    {
        $ppdb = Ppdb::select(['id', 'namapd', 'nisnpd', 'namaayah', 'telpayah', 'namaibu', 'telpibu']);

        return DataTables::eloquent($ppdb)
        ->addIndexColumn()
        ->addColumn('action', function ($ppdb) {
            return '<div class="btn-group" role="group" aria-label="Basic example">
                      <a href="#" type="button" class="btn btn-md btn-primary">Lihat</a>
                      <a href="#" type="button" class="btn btn-md btn-danger">Hapus</a>
                      <a href="'.route('edit', $ppdb->nisnpd).'"type="button" class="btn btn-md btn-success">Edit</a>
                    </div>';
        })
        ->toJson();
    }
}
