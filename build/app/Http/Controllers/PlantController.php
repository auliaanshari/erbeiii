<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;
use DataTables;

class PlantController extends Controller
{
    public function data()
    {
        $plant = Plant::all();
        return DataTables::of($plant)->toJson();
    }
}