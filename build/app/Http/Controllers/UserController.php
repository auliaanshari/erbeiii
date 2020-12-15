<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function data()
    {
        $user = User::all();
        // $item->role().role_name;
        return DataTables::of($user)->toJson();
    }
}
