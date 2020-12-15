<?php

namespace App\Http\Controllers;

use App\AnalysisHE;
use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class AnalysisHEController extends Controller
{
    public function data()
    {
        $he = AnalysisHE::all();
        return DataTables::of($he)->toJson();
    }
}

