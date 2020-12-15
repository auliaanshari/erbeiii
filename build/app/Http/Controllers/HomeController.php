<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pie;
use App\AnalysisPRD;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function data()
    // {
        
    //     $hasil = [];

    //     $pie = pie::get();
    //     foreach ($pie as $key => $pie) {
    //         $id_pie = $pie->id;
    //         $kategori = $pie->kategori;
    //         $total = AnalysisPRD::where('fail_to_open_risk_ranking',$kategori)->count();
    //         $colors = ["#008000","#FF0000"];
            

    //         // $a['name'] = $kategori;
    //         // $a['y'] = $total;
    //         // $a['color'] = $colors[$key];
    //         // array_push($hasil, $a);
    //     }
    //     dd($total);
        
    // }
}
