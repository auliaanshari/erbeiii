<?php

namespace App\Http\Controllers;

use App\AnalysisPVASTPiping;
use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class AnalysisPVController extends Controller
{
    public function data()
    {
        $pv = AnalysisPVASTPiping::all();
        return DataTables::of($pv)->toJson();
    }
}

