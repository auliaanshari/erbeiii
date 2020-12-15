<?php

namespace App\Http\Controllers;

use App\PlantSection;
use Illuminate\Http\Request;
use DataTables;

class PlantSectionController extends Controller
{
    public function data()
    {
        $plantsection = PlantSection::all();
        return DataTables::of($plantsection)->toJson();
    }
}