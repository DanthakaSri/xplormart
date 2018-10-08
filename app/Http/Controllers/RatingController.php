<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    /**
     * @param $market_id
     * @return \Illuminate\Support\Collection
     */
    public static function getRatingComments($market_id)
    {
        $comments = DB::table('ratings')->where('market_id', '=', $market_id)->latest()->get();

        return $comments;
    }

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

        $name = $request['username'];
        $filename = '';
        $verify = 0;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $name . '_' . +time() . '.' . $extension;
            $destination = public_path('img/uploads/market');
            $file->move($destination, $filename);
        } else {
            $filename = 'user_default.jpg';
        }
        if ($request['verify'] == "on") {
            $verify = 1;
        } elseif ($request['verify'] == null) {
            $verify = 0;
        }

        Rating::create([
            'market_id' => $request['market_id'],
            'username' => $request['username'],
            'email' => $request['email'],
            'rating' => (integer)$request['rating'],
            'image' => '/img/uploads/market/' . (string)$filename,
            'verify' => $verify,
            'comment' => $request['comment'],

        ]);

        $rating_avg = self::getRatingNumber($request['market_id']);
        $verify_count = self::getMarketVerifyStatus($request['market_id']);

        DB::table('markets')
            ->where('id', '=', $request['market_id'])
            ->update(['avg_rating' => $rating_avg, 'verify_count' => $verify_count]);

        return redirect()->route('shop.show', $request['market_id'])->with('status', 'Thank you for your feedback');
    }

    /**
     * @param $market_id
     * @return mixed
     */
    public static function getRatingNumber($market_id)
    {
        $rating = DB::table('ratings')
            ->where('market_id', '=', $market_id)
            ->avg('rating');

        return $rating;

    }

    /**
     * @param $market_id
     * @return int
     */
    public static function getMarketVerifyStatus($market_id)
    {
        $verify = DB::table('ratings')->where([['market_id', '=', $market_id], ['verify', '=', 1]])->count();

        return $verify;
    }

    /**
     * Display the specified resource.
     *
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {


        $comments = DB::table('ratings')->where('market_id', '=', $id)->get();
        $verify = DB::table('ratings')->where([['market_id', '=', $id], ['verify', '=', 1]])->count();

        return compact('rating', 'comments', 'verify');


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
