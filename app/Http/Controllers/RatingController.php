<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'comment' => 'required',
            'rating' => 'required',

        ]);
        if ($validator->fails()) {
            $url = 'shop/' . $request['market_id'];
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }

        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $type . '_' . +time() . '.' . $extension;
            $destination = public_path('img/uploads/market');
            $file->move($destination, $filename);
        } else {
            $filename = 'user_default.jpg';
        }


        Rating::create([
            'market_id' => $request['market_id'],
            'username' => $request['username'],
            'email' => $request['email'],
            'rating' => $request['rating'],
            'image' => '/img/uploads/market/' . (string)$filename,
            'verify' => $request['verify'],
            'comment' => $request['comment'],

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
