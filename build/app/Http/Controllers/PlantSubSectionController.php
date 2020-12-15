<?php

namespace App\Http\Controllers;

use App\PlantSubSection;
use Illuminate\Http\Request;
use DataTables;

class PlantSubSectionController extends Controller
{
    public function data()
    {
        $plantsubsection = PlantSubSection::all();
        return DataTables::of($plantsubsection)->toJson();
    }
}