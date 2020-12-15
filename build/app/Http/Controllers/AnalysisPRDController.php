<?php

namespace App\Http\Controllers;

use App\AnalysisPRD;
use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class AnalysisPRDController extends Controller
{
    public function data()
    {
        $prd = AnalysisPRD::all();
        return DataTables::of($prd)->toJson();
    }
}

