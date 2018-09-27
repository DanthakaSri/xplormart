@extends('layouts.baseApp')

@section('title','Home')
@section('nvClass','')
@section('nvClass2','transparent-navbar')
@section('content')
    <!-- BANNER SECTION -->
    <section class="clearfix homeBanner" style="background-image: url(img/banner/banner1.png);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banerInfo">
                        <h1>Explore Your Local Market</h1>
                        <p>Xplormart helps to find out local markets arround you</p>
                        <form class="form-inline" action="listing-sidebar-map-left.html" method="">
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Find</div>
                                    <input type="text" class="form-control" id="findItem" placeholder="Keywords">
                                    <div class="input-group-addon addon-right"></div>
                                </div>
                            </div>
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Type</div>
                                    <select class="form-control" id="type" placeholder="">
                                        <option>Korean</option>
                                        <option>Japaneese</option>
                                        <option>Sri Lankan</option>
                                        <option>Indian</option>
                                        <option>Malaysian</option>
                                        <option>Taiwanese</option>
                                        <option>Thai</option>
                                        <option>Vietnamese</option>
                                        <option>Indonesian</option>
                                        <option>Chinese</option>
                                        <option>Italian</option>
                                        <option>French</option>
                                        <option>American</option>
                                        <option>African</option>
                                        <option>Australian</option>
                                        <option>Russian</option>
                                        <option>Singapore</option>
                                        <option>Turkish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Near</div>
                                    <input type="text" class="form-control" id="nearLocation" placeholder="Location">
                                    <div class="input-group-addon addon-right"><i class="icon-listy icon-target" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="btnWrapper">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THINGS SECTION -->
    <section class="clearfix thingsArea">
        <div class="container">
            <div class="page-header text-center">
                <h2>Popular Things Near You <small>This are some of most popular listing</small></h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="thubmnailSlider" class="carousel slide thumbnailCarousel">

                        <ol class="carousel-indicators">
                            <li data-target="#thubmnailSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="1"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="2"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="3"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="4"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="5"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="6"></li>
                            <li data-target="#thubmnailSlider" data-slide-to="7"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item row active">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thingsBox">
                                        <div class="thingsImage">
                                            <img src="img/things/bk.png" alt="Image things">
                                            <div class="thingsMask">
                                                <ul class="list-inline rating">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul>
                                                <a href="{{ action('MarketController@show') }}"><h2>Asian Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>215 Terry Lane, Darwin</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 8 k</li>
                                                <li><a href="{{ action('MarketController@show') }}">Eat & Drink</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thingsBox">
                                        <div class="thingsImage">
                                            <img src="img/things/bk.png" alt="Image things">
                                            <div class="thingsMask">
                                                <ul class="list-inline rating">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                </ul>
                                                <a href="{{ action('MarketController@show') }}"><h2>Korean Market</h2></a>
                                                <p>2726 Shinn Street, Rapid Creek</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 9.2 k</li>
                                                <li><a href="{{ action('MarketController@show') }}">Eat & Drink</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thingsBox">
                                        <div class="thingsImage">
                                            <img src="img/things/bk.png" alt="Image things">
                                            <div class="thingsMask">
                                                <ul class="list-inline rating">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul>
                                                <a href="{{ action('MarketController@show') }}"><h2>Sunday Sri Lankan Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>778 Country Street, Palmerston</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 5k</li>
                                                <li><a href="{{ action('MarketController@show') }}">Hotels</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thingsBox">
                                        <div class="thingsImage">
                                            <img src="img/things/bk.png" alt="Image things">
                                            <div class="thingsMask">
                                                <ul class="list-inline rating">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul>
                                                <a href="{{ action('MarketController@show') }}"><h2>Indian Market</h2></a>
                                                <p>31 Union Square, Woodrofe</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
                                                <li><a href="{{ action('MarketController@show') }}"> Taiwan Market</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thingsBox ">
                                        <div class="thingsImage">
                                            <img src="img/things/bk.png" alt="Image things">
                                            <div class="thingsMask">
                                                <ul class="list-inline rating">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul>
                                                <a href="{{ action('MarketController@show') }}"><h2>Italian Food Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>Queens, NY 11430, Banksia Street</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 15 k</li>
                                                <li><a href="{{ action('MarketController@show') }}">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#thubmnailSlider" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#thubmnailSlider" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
