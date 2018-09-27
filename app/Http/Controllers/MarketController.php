<?php

namespace App\Http\Controllers;

use App\Market;
use Illuminate\Http\Request;
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
        return view('market.addMarket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('market.addMarket');
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
            'address'=>'required',
            'phone_num' => 'string|max:10',

        ]);
        if ($validator->fails()) {
            return redirect('shop/create')
                ->withErrors($validator)
                ->withInput();
        }

        //image uploading and save
        $name = $request['name'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $name . '_' . +time() . '.' . $extension;
            $destination=public_path('img/uploads/market');
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



        return redirect()->back()->with('status', 'Market created');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Market $market
     * @return \Illuminate\Http\Response
     */
    /* public function show(Market $market)
     {
         return view('market.viewMarket');
     }*/
    public function show()
    {
        return view('market.viewMarket');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Market $market
     * @return \Illuminate\Http\Response
     */
    public function edit(Market $market)
    {
        //
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
