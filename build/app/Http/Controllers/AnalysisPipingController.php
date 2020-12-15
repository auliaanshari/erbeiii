<?php

namespace App\Http\Controllers;

use App\AnalysisPVASTPiping;
use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class AnalysisPipingController extends Controller
{
    public function data()
    {
        $piping = AnalysisPVASTPiping::all();
        return DataTables::of($piping)->toJson();
    }
}

