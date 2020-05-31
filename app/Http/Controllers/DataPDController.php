<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppdb;
use DataTables;

class DataPDController extends Controller
{
    public function indexpd()
    {
        return view('panel.app.indexpd');
    }

    public function getdatapd()
    {
        return DataTables::of(Ppdb::query())->make(true);
    }
}
