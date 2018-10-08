<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    /**
     * show the top 10 markets which has more than 3 stars rating 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        $latest_markets = DB::table('markets')
            ->groupBy('id')
            ->having('avg_rating', '>', 3)->take(10)
            ->get();
        return view('home', compact('latest_markets', 'types'));
    }
}
