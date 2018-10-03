<?php

use Illuminate\Support\Facades\DB;

public function getRatingNumber($market_id)
{
    $rating = DB::table('ratings')
        ->where('market_id','=', $market_id)
        ->avg('rating');

    return $rating;

}

public  function getRatingComments($market_id)
{
    $comments = DB::table('ratings')->where('market_id','=',$market_id)->get();

    return $comments;
}

public  function getMarketVerifyStatus($market_id)
{
    $verify=DB::table('ratings')->where([['market_id','=',$market_id],['verify','=',1]])->count();

    return $verify;
}
