@extends('layouts.baseApp')

@section('title','View Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
    <!-- LISTINGS DETAILS TITLE SECTION -->
    <section class="clearfix paddingAdjustBottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="listingTitleArea">
                        <h2>{{ $market_details->name }}</h2>
                        <p>{{$market_details->street_address}}, {{$market_details->suburb}} <br></p>
                        <div class="listingReview">
                            <ul class="list-inline rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            </ul>
                            <span>( 5 Reviews )</span>
                            <a href="#" class="btn btn-primary">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LISTINGS DETAILS IMAGE SECTION -->
    <section class="clearfix paddingAdjustTopBottom">
        <ul class="list-inline listingImage">
            <li><img src="{{asset($market_details->image)}}" alt="Image Listing" class="img-responsive"></li>
        </ul>
    </section>

    <!-- LISTINGS DETAILS INFO SECTION -->
    <section class="clearfix paddingAdjustTop">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <div class="listDetailsInfo">
                        <div class="detailsInfoBox">
                            <h3>About {{$market_details->name}}</h3>
                            <p>{{$market_details->description}}</p>
                        </div>
                        <div class="detailsInfoBox">
                            <h3>Features</h3>
                            <ul class="list-inline featuresItems">
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Ingrediants</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Bulk order</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Beverages</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Vegetarian</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Dry food</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Street Parking</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Accept Credit Card</li>
                            </ul>
                        </div>
                        <div class="detailsInfoBox">
                            <h3>Reviews (3)</h3>
                            <div class="media media-comment">
                                <div class="media-left">
                                    <img src="{{asset('img/listing/list-user-1.jpg')}}" class="media-object img-circle"
                                         alt="Image User">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Theshan</h4>
                                    <ul class="list-inline rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudan
                                        totam rem ape riam,</p>
                                </div>
                            </div>
                            <div class="media media-comment">
                                <div class="media-left">
                                    <img src="{{asset('img/listing/list-user-2.jpg')}}" class="media-object img-circle"
                                         alt="Image User">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Rock</h4>
                                    <ul class="list-inline rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudan
                                        totam rem ape riam,</p>
                                </div>
                            </div>
                            <div class="media media-comment">
                                <div class="media-left">
                                    <img src="{{ asset('img/listing/list-user-3.jpg') }}"
                                         class="media-object img-circle" alt="Image User">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Pasindu</h4>
                                    <ul class="list-inline rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudan
                                        totam rem ape riam,</p>
                                </div>
                            </div>
                            <div class="media media-comment">
                                <div class="media-left">
                                    <img src="{{ asset('img/listing/list-user-3.jpg') }}"
                                         class="media-object img-circle" alt="Image User">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Chrishan</h4>
                                    <ul class="list-inline rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudan
                                        totam rem ape riam,</p>
                                </div>
                            </div>
                        </div>
                        <div class="detailsInfoBox">
                            <h3>Write A Review </h3>
                            <div class="listingReview">
                                <span>( 5 Reviews )</span>
                                <ul class="list-inline rating rating-review">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <form action="#">
                                <div class="formSection formSpace">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="form-group mb0">
                                        <button type="submit" class="btn btn-primary">Send Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="listSidebar">
                        <h3>Location</h3>
                        <div class="contactInfo">
                            <ul class="list-unstyled list-address">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{ $market_details->street_address }}, {{$market_details->suburb}}
                                    ,{{$market_details->city}}. {{$market_details->postcode}}
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    {{$market_details->phone_num}}
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:{{ $market_details->email }}">{{$market_details->email}}</a>
                                </li>
                                @if($market_details->fb_url != null)
                                    <li>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <a href="{{ $market_details->fb_url }}">{{ $market_details->fb_url }}</a>
                                    </li>
                                @endif
                                @if($market_details->youtube_url != null)
                                    <li>
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                        <a href="{{ $market_details->youtube_url }}">{{ $market_details->youtube_url }}</a>
                                    </li>
                                @endif

                                @if($market_details->twitter != null)
                                    <li>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <a href="{{ $market_details->twitter_url }}">{{ $market_details->twitter_url }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="listSidebar">
                        <h3>Opening Hours</h3>
                        <ul class="list-unstyled sidebarList">
                            <li>
                                <span class="pull-left">Monday</span>
                                <span class="pull-right">{{ $market_details->monday }}</span>
                            </li>
                            <li>
                                <span class="pull-left">Tuesday</span>
                                <span class="pull-right">{{ $market_details->tuesday }}</span>
                            </li>
                            <li>
                                <span class="pull-left">Wednesday</span>
                                <span class="pull-right">{{$market_details->wednesday}}</span>
                            </li>
                            <li>
                                <span class="pull-left">Thrusday</span>
                                <span class="pull-right">{{$market_details->thursday}}</span>
                            </li>
                            <li>
                                <span class="pull-left">Friday</span>
                                <span class="pull-right">{{$market_details->friday}}</span>
                            </li>
                            <li>
                                <span class="pull-left">Saturday</span>
                                <span class="pull-right">{{$market_details->saturday}}</span>
                            </li>
                            <li>
                                <span class="pull-left">Sunday</span>
                                <span class="pull-right">{{$market_details->sunday}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
