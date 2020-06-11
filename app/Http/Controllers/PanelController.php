<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Ppdb;
use App\Exports\PpdbExport;
use Maatwebsite\Excel\Facades\Excel;
use Datatables;

class PanelController extends Controller
{
    public function dasbor()
    {
        $ppdbs = Ppdb::count('namapd');
        return view('panel.app.dasbor', ['ppdbs'=>$ppdbs]);
    }

    public function export()
    {
        return Excel::download(new PpdbExport, 'ppbd.xlsx');
    }

    public function edit($id)
    {
       $ppdbs = Ppdb::find($id);
       return view('panel.app.edit', ['ppdbs'=>$ppdbs]);
    }

}
