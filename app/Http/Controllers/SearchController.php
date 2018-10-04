<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function getAllSearch(Request $request)
    {


        $keyword = $request['keyword'];
        $type = $request['type'];
        $location = $request['location'];


        if ($keyword != null && $type != null && $location != null) {
            $this->getAllFieldSearch($request);
        } elseif ($keyword != null && $type = null && $location = null) {
            $this->getMarketByKeyword($keyword);
        } elseif ($keyword = null && $type != null && $location = null) {
            $this->getMarketByKeyword($type);
        } elseif ($keyword = null && $type = null && $location != null) {
            $this->getMarketByKeyword($location);
        }

        return route('shop.index');
    }

    public function getAllFieldSearch(Request $request)
    {
        $keyword = $request['keyword'];
        $type = $request['type'];
        $location = $request['location'];

        $markets = DB::table('markets')->where([
            ['name', 'like', '%' . $keyword . '%'],
            ['type', '=', $type],
            ['suburb', '=', $location],
        ])->get();

        $types = Type::all();

        return view('market.allMarkets', compact('markets', 'types'));
    }

    public function getMarketByKeyword($keyword)
    {
        $markets = DB::table('markets')
            ->where('name', 'like', '%' . $keyword . '%')
            ->get();

        $types = Type::all();

        return view('market.allMarkets', compact('markets', 'types'));
    }

    public function getMarketByType($type)
    {
        $markets = DB::table('markets')
            ->where('type', '=', '%' . $type . '%')
            ->get();

        $types = Type::all();

        return view('market.allMarkets', compact('markets', 'types'));
    }

    public function getMarketByLocation($location)
    {

        $markets = DB::table('markets')
            ->where('suburb', 'like', '%' . $location . '%')
            ->get();

        $types = Type::all();

        return view('market.allMarkets', compact('markets', 'types'));
    }
}
