<?php

namespace App\Http\Controllers;

use App\Market;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markets = DB::table('markets')->simplePaginate(8);
        $types = Type::all();

        return view('market.allMarkets', compact('markets', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $types = Type::all();
        return view('market.addMarket', compact('types'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'type' => 'required',
            'address' => 'required',
            'phone_num' => 'string|max:10',

        ]);
        if ($validator->fails()) {
            return redirect('shop/create')
                ->withErrors($validator)
                ->withInput();
        }

        //image uploading and save
        $type = $request['type'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $type . '_' . +time() . '.' . $extension;
            $destination = public_path('img/uploads/market');
            $file->move($destination, $filename);
        }


        Market::create([
            'name' => $request['name'],
            'type' => $request['type'],
            'description' => $request['description'],
            'country' => $request['country'],
            'phone_num' => $request['phone_num'],
            'email' => $request['email'],
            'website' => $request['website'],
            'address' => $request['address'],
            'image' => '/img/uploads/market/' . $filename,
            'fb_url' => $request['fb_url'],
            'youtube_url' => $request['youtube_url'],
            'twitter_url' => $request['twitter_url'],
            'monday' => $request['monday'],
            'tuesday' => $request['tuesday'],
            'wednesday' => $request['wednesday'],
            'thursday' => $request['thursday'],
            'friday' => $request['friday'],
            'saturday' => $request['saturday'],
            'sunday' => $request['sunday'],

        ]);


        return redirect()->route('shop.index')->with('status', 'Market created');;

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $market_details=Market::where('id','=' ,$id)->first();
//        return $market_details;
         return view('market.viewMarket',compact('market_details'));
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Market $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Market $market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Market $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(Market $market)
    {
        //
    }
}
