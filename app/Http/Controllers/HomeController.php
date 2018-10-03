<?php

namespace App\Http\Controllers;

use App\Market;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Type::all();
        $latest_markets=DB::table('markets')
            ->groupBy('id')
            ->having('avg_rating', '>', 3)->take(10)
            ->get();
        return view('home',compact('latest_markets','types'));
    }
}
