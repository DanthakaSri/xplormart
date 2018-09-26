@extends('layouts.baseApp')

@section('title','Home')

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
                                    <input type="text" class="form-control" id="findItem" placeholder="What are you looking?">
                                    <div class="input-group-addon addon-right"></div>
                                </div>
                            </div>
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Type</div>
                                    <select class="form-control" id="type" placeholder="">
                                        <option>Korean</option>
                                        <option>Sri Lanakan</option>
                                        <option>Indian</option>
                                        <option>Japanese</option>
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
                                                <a href="listing-details-left.html"><h2>Asian Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>215 Terry Lane, Darwin</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 8 k</li>
                                                <li><a href="category-list-full.html">Eat & Drink</a></li>
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
                                                <a href="listing-details-left.html"><h2>Korean Market</h2></a>
                                                <p>2726 Shinn Street, Rapid Creek</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 9.2 k</li>
                                                <li><a href="category-grid-full.html">Eat & Drink</a></li>
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
                                                <a href="listing-details-left.html"><h2>Sunday Sri Lankan Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>778 Country Street, Palmerston</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 5k</li>
                                                <li><a href="category-grid-full.html">Hotels</a></li>
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
                                                <a href="listing-details-left.html"><h2>Indian Market</h2></a>
                                                <p>31 Union Square, Woodrofe</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
                                                <li><a href="category-grid.html"> Taiwan Market</a></li>
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
                                                <a href="listing-details-left.html"><h2>Italian Food Market <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                                <p>Queens, NY 11430, Banksia Street</p>
                                            </div>
                                        </div>
                                        <div class="thingsCaption ">
                                            <ul class="list-inline captionItem">
                                                <li><i class="fa fa-heart-o" aria-hidden="true"></i> 15 k</li>
                                                <li><a href="category-list-full.html">Others</a></li>
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


    <!-- COUNT UP SECTION -->
   {{-- <section class="clearfix countUpSection">
        <div class="container">
            <div class="page-header text-center">
                <h2>Why Listy?</h2>
            </div>
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="text-center countItem">
                        <div class="counter">140</div>
                        <div class="counterInfo bg-color-1">Color Variations</div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="text-center countItem">
                        <div class="counter">120</div>
                        <div class="counterInfo bg-color-2">Layouts</div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="text-center countItem">
                        <div class="counter">180</div>
                        <div class="counterInfo bg-color-3">Inner Pages</div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="text-center countItem">
                        <div class="counter">220</div>
                        <div class="counterInfo bg-color-4">Admin Pages</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="btnArea text-center">
                        <a href="#" class="btn btn-primary">Get it now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <!-- WORKS SECTION -->
   {{-- <section class="clearfix worksArea">
        <div class="container">
            <div class="page-header text-center">
                <h2>How it Works? <small>This are some of most popular listing</small></h2>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail text-center worksContent">
                        <img src="img/works/works-1.png" alt="Image works">
                        <div class="caption">
                            <a href="how-it-works.html"><h3>Find what you want</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail text-center worksContent">
                        <img src="img/works/works-2.png" alt="Image works">
                        <div class="caption">
                            <a href="how-it-works.html"><h3>Review & Plan your day</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail text-center worksContent">
                        <img src="img/works/works-3.png" alt="Image works">
                        <div class="caption">
                            <a href="how-it-works.html"><h3>Explore Location</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="btnArea text-center"><a href="#" class="btn btn-primary">Watch it now <i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </section>--}}

    <!-- ARTICLES SECTION-->
    {{--<section class="clearfix articlesArea">
        <div class="container">
            <div class="page-header text-center">
                <h2>Articles <small>Brouse latest tips from our blog </small></h2>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail articleContent">
                        <a href="blog-details.html"><img src="img/articles/article-1.jpg" alt="Image articles" class="img-responsive"></a>
                        <div class="caption">
                            <h4>Jan 22, 2018 by <a href="#">Jno Deo</a></h4>
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit amet</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail articleContent">
                        <a href="blog-details.html"><img src="img/articles/article-2.jpg" alt="Image articles" class="img-responsive"></a>
                        <div class="caption">
                            <h4>jan 20, 2018 by <a href="#">Adam Smith</a></h4>
                            <h3><a href="blog-details.html">Ut enim ad minim veniam.</a></h3>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail articleContent">
                        <a href="blog-details.html"><img src="img/articles/article-3.jpg" alt="Image articles" class="img-responsive"></a>
                        <div class="caption">
                            <h4>Jan 10, 2018 by <a href="#">Kathy Brown</a></h4>
                            <h3><a href="blog-details.html">velit esse cillum dolore eu fugiat</a></h3>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

    <!-- CALL TO ACTION SECTION -->
    {{--<section class="clearfix callAction">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9 col-xs-12">
                    <div class="callInfo">
                        <h4><span>Listty</span> is the <span>best way</span> <br>to find great local business</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="btnArea">
                        <a href="sign-up.html" class="btn btn-primary btn-block">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

@endsection
