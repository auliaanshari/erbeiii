<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use DataTables;

class EquipmentController extends Controller
{
    public function data()
    {
        $equipment = Equipment::all();
        return DataTables::of($equipment)->toJson();
    }
}