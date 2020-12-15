<?php

namespace App\Http\Controllers;

use App\AnalysisPVASTPiping;
use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class AnalysisASTController extends Controller
{
    public function data()
    {
        $ast = AnalysisPVASTPiping::all();
        return DataTables::of($ast)->toJson();
    }
}

