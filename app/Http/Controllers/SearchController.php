<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function getAllSearch(Request $request)
    {


        if ($request->has('keyword') && ($request->input('keyword') != null)) {
            if ($request->has('type') && ($request->input('type') != null)) {
                if ($request->has('location') && ($request->input('location') != null)) {
                    echo 'worked all';
                    return $this->getAllFieldSearch($request);
                }
            }
        }

        if ($request->has('keyword') && ($request->input('keyword') != null)) {
            if ($request->has('type') && ($request->input('type') != null)) {
                return $this->getKeywordAndType($request->input('keyword'), $request->input('type'));
            }

        }
        if ($request->has('keyword') && ($request->input('keyword') != null)) {
            if ($request->has('location') && ($request->input('location') != null)) {
                return $this->getKeywordAndLocation($request->input('keyword'), $request->input('location'));
            }

        }
        if ($request->has('type') && ($request->input('type') != null)) {
            if ($request->has('location') && ($request->input('location') != null)) {
                return $this->getTypeAndLocation($request->input('type'), $request->input('location'));
            }

        }


        if ($request->has('keyword') && ($request->input('keyword') != null)) {
            echo 'worked keyword';
            return $this->getMarketByKeyword($request->input('keyword'));
        }
        if ($request->has('type') && ($request->input('type') != null)) {
            echo 'worked type';
            return $this->getMarketByType($request->input('type'));
        }

        if ($request->has('location') && ($request->input('location') != null)) {
            echo 'worked location';
            return $this->getMarketByLocation($request->input('location'));
        }


        return redirect()->route('shop.index');

    }

    public function getAllFieldSearch(Request $request)
    {
        $keyword = $request['keyword'];
        $type = $request['type'];
        $location = $request['location'];


        $markets = DB::table('markets')->where([
            ['name', 'like', "%{$keyword}%"],
            ['type', '=', $type],
            ['suburb', 'like', "%{$location}%"],
        ])->get();


        $types = Type::all();

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getKeywordAndType($keyword, $type)
    {

        $markets = DB::table('markets')->where([
            ['name', 'like', "%{$keyword}%"],
            ['type', '=', $type],
        ])->get();


        $types = Type::all();

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getKeywordAndLocation($keyword, $location)
    {

        $markets = DB::table('markets')->where([
            ['name', 'like', "%{$keyword}%"],
            ['suburb', 'like', "%{$location}%"],
        ])->orWhere([
            ['name', 'like', "%{$keyword}%"],
            ['city', 'like', "%{$location}%"],
        ])->get();


        $types = Type::all();

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getTypeAndLocation($type, $location)
    {

        $markets = DB::table('markets')->where([
            ['type', 'like', "%{$type}%"],
            ['suburb', 'like', "%{$location}%"],
        ])->orWhere([
            ['type', 'like', "%{$type}%"],
            ['city', 'like', "%{$location}%"],
        ])->get();


        $types = Type::all();

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getMarketByKeyword($keyword)
    {

        $markets = DB::table('markets')
            ->where('name', 'like', "%{$keyword}%")
            ->get();

        $types = Type::all();

        return view('market.searchResults', compact('markets', 'types'));


    }

    public function getMarketByType($type)
    {


        $markets = DB::table('markets')
            ->where('type', '=', $type)
            ->get();

        $types = Type::all();
//        return $key;

        return view('market.searchResults', compact('markets', 'types'));
    }

    public function getMarketByLocation($location)
    {


        $markets = DB::table('markets')
            ->where('suburb', 'like', "%{$location}%")->orWhere('city', 'like', "%{$location}%")
            ->get();

        $types = Type::all();
//        return $key;
        return view('market.searchResults', compact('markets', 'types'));
    }


}
