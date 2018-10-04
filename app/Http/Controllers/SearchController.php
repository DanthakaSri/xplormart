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


        if ($request->has('keyword')) {
            if($request->has('type'))
            {
                if ($request->has('location'))
                {
                    return $this->getAllFieldSearch($request);
                }
            }
        }
        if ($request->has('keyword')) {
            return $this->getMarketByKeyword($keyword);
        }
        if ($request->has('type')) {
            return $this->getMarketByKeyword($type);
        }
        if ($request->has('location')) {
            return $this->getMarketByKeyword($location);
        }


        return redirect()->route('shop.index');

    }

    public function getAllFieldSearch(Request $request)
    {
        $keyword = $request['keyword'];
        $type = $request['type'];
        $location = $request['location'];

        $key= $keyword . '%';
        $markets = DB::table('markets')->where([
            ['name', 'like',$key ],
            ['type', '=', $type],
            ['suburb', '=', $location],
        ])->get();

        $types = Type::all();

//        return $markets;

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getMarketByKeyword($keyword)
    {
        $key='%' . $keyword . '%';
        $markets = DB::table('markets')
            ->where('name', 'like', $key)
            ->get();

        $types = Type::all();
//        return $key;

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getMarketByType($type)
    {

        $key='%' . $type . '%';
        $markets = DB::table('markets')
            ->where('type', '=', $key)
            ->get();

        $types = Type::all();
//        return $key;

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getMarketByLocation($location)
    {

        $key='%' . $location . '%';
        $markets = DB::table('markets')
            ->where('suburb', 'like', $key)
            ->get();

        $types = Type::all();
//        return $key;
        return view('market.searchResults', compact('markets', 'types'));
    }
}
