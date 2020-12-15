<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use DataTables;

class CompanyController extends Controller
{
    public function data()
    {
        $company = Company::all();
        return DataTables::of($company)->toJson();
    }
}
