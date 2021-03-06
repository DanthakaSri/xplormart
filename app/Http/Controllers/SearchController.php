<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    /**
     *  Get all search inputs and passing to correct method
     *
     */
    public function getAllSearch(Request $request)
    {
        //get correct location
        $location = $request->input('location');
        $newlocation = explode(" ", $location);
        $request['location'] = $newlocation[0];


        if ($request->has('keyword') && ($request->input('keyword') != null)) {
            if ($request->has('type') && ($request->input('type') != null)) {
                if ($request->has('location') && ($request->input('location') != null)) {
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

            return $this->getMarketByKeyword($request->input('keyword'));
        }
        if ($request->has('type') && ($request->input('type') != null)) {

            return $this->getMarketByType($request->input('type'));
        }

        if ($request->has('location') && ($request->input('location') != null)) {

            return $this->getMarketByLocation($request->input('location'));
        }


        return redirect()->route('shop.index');

    }

    /**
     * Get the market results if request has all the request fields
     * @return \Illuminate\Http\Response
     */

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


        $types = DB::table('types')->paginate(10);

        return view('market.searchResults', compact('markets', 'types'));
    }

    /**
     * Get Market results if request has only keyword and market type
     * @return \Illuminate\Http\Response
     */
    public function getKeywordAndType($keyword, $type)
    {

        $markets = DB::table('markets')->where([
            ['name', 'like', "%{$keyword}%"],
            ['type', '=', $type],
        ])->get();


        $types = DB::table('types')->paginate(10);

        return view('market.searchResults', compact('markets', 'types'));
    }


    /**
     * Get Market results if request has only keyword and market location
     * @return \Illuminate\Http\Response
     */

    public function getKeywordAndLocation($keyword, $location)
    {

        $markets = DB::table('markets')->where([
            ['name', 'like', "%{$keyword}%"],
            ['suburb', 'like', "%{$location}%"],
        ])->orWhere([
            ['name', 'like', "%{$keyword}%"],
            ['city', 'like', "%{$location}%"],
        ])->get();


        $types = DB::table('types')->paginate(10);

        return view('market.searchResults', compact('markets', 'types'));
    }


    /**
     * Get Market results if request has only market type and market location
     * @return \Illuminate\Http\Response
     */
    public function getTypeAndLocation($type, $location)
    {

        $markets = DB::table('markets')->where([
            ['type', 'like', "%{$type}%"],
            ['suburb', 'like', "%{$location}%"],
        ])->orWhere([
            ['type', 'like', "%{$type}%"],
            ['city', 'like', "%{$location}%"],
        ])->get();


        $types = DB::table('types')->paginate(10);

        return view('market.searchResults', compact('markets', 'types'));
    }


    /**
     *
     * Get Market results if request has only keyword
     * @return \Illuminate\Http\Response
     */

    public function getMarketByKeyword($keyword)
    {

        $markets = DB::table('markets')
            ->where('name', 'like', "%{$keyword}%")
            ->get();

        $types = DB::table('types')->paginate(10);

        return view('market.searchResults', compact('markets', 'types'));


    }

    /**
     *
     * Get Market results if request has only market type
     * @return \Illuminate\Http\Response
     */

    public function getMarketByType($type)
    {
        $markets = DB::table('markets')
            ->where('type', '=', $type)
            ->get();
        $types = DB::table('types')->paginate(10);
        return view('market.searchResults', compact('markets', 'types'));
    }

    /**
     *
     * Get Market results if request has only market location
     * @return \Illuminate\Http\Response
     */

    public function getMarketByLocation($location)
    {
        $markets = DB::table('markets')
            ->where('suburb', 'like', "%{$location}%")->orWhere('city', 'like', "%{$location}%")
            ->get();

        $types = DB::table('types')->paginate(10);
//        return $key;
        return view('market.searchResults', compact('markets', 'types'));
    }


}
