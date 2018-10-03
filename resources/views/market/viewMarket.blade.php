@extends('layouts.baseApp')

@section('title','View Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <style>
        .rating2 {
            unicode-bidi: bidi-override;
            direction: rtl;
            width: 10em;
        }

        .rating2 input {
            position: absolute;
            left: -999999px;
        }

        .rating2 label {
            display: inline-block;
            font-size: 0;
            cursor: pointer;
        }

        .rating2 > label:before {
            position: relative;
            font: 24px/1 FontAwesome;
            display: block;
            content: "\f005";
            color: #ccc;
            background: -webkit-linear-gradient(-45deg, #d9d9d9 0%, #b3b3b3 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rating2 > label:hover:before,
        .rating2 > label:hover ~ label:before,
        .rating2 > label.selected:before,
        .rating2 > label.selected ~ label:before {
            color: #f0ad4e;
            background: -webkit-linear-gradient(-45deg, #fcb551 0%, #d69a45 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ratingForm label {
            font-weight: 400;
        }

        .close:focus, .close:hover {
            color: #00cc67;
        }

        button.close {
            font-size: 26px;
        }


    </style>

    <!-- LISTINGS DETAILS TITLE SECTION -->
    <section class="clearfix paddingAdjustBottom">
        <div class="container">
            <div class="row">
                <div class=" col-xs-12">
                    <div class="listingTitleArea">
                        <h2>{{ $market_details->name }}</h2>
                        <p>{{$market_details->street_address}}, {{$market_details->suburb}}
                            @if($verify >5)
                                <br><span class="label label-success">Verified Market</span><br>
                            @endif</p>

                        <div class="listingReview">
                            <ul class="list-inline rating">
                                @foreach(range(1,5) as $i)
                                    <span class="fa-stack" style="width: 3px;">
                                         <li><i class="fa fa-star-o fa-stack-2x fa-2x" aria-hidden="true"></i></li>

                                        @if($rating >0)
                                            @if($rating >0.5)
                                                <li><i class="fa fa-star fa-stack-2x fa-2x" aria-hidden="true"></i></li>
                                            @else
                                                <li><i class="fa fa-star-half fa-stack-2x fa-2x" aria-hidden="true"></i></li>
                                            @endif
                                        @endif
                                        @php $rating--; @endphp
                                     </span>
                                @endforeach
                            </ul>

                            <div class="ratingBottomWrapper col-sm-12 col-md-12 noPadding">

                                <div class="col-sm-6 col-md-6 noPadding reviewCount">( {{(integer)$comments->count()}}
                                    Reviews )
                                </div>
                                <div class="col-sm-6 col-md-6 noPadding">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Write a review
                                    </button>
                                </div>

                            </div>


                            <!-- Button trigger for review modal  -->

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
                        <br>
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
                        <br>
                        <div class="detailsInfoBox">
                            <h3>Reviews ({{$comments->count()}})</h3>

                            <hr>


                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <strong> {{ session('status') }}</strong>.
                                </div>
                            @endif

                            @foreach($comments as $comment)

                                <div class="media media-comment">
                                    <div class="media-left">
                                        <img src="{{asset($comment->image)}}" class="media-object img-circle"
                                             alt="Image User">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$comment->username}}</h4>
                                        <ul class="list-inline rating">

                                            @foreach(range(1,5) as $i)
                                                <span class="fa-stack" style="width: 10px;">
                                         <li><i class="fa fa-star-o fa-stack-2x fa-2x" aria-hidden="true"></i></li>

                                                    @if($comment->rating >0)
                                                        @if($comment->rating >0.5)
                                                            <li><i class="fa fa-star fa-stack-2x fa-2x"
                                                                   aria-hidden="true"></i></li>
                                                        @else
                                                            <li><i class="fa fa-star-half fa-stack-2x fa-2x"
                                                                   aria-hidden="true"></i></li>
                                                        @endif
                                                    @endif
                                                    @php $comment->rating--; @endphp
                                     </span>
                                            @endforeach

                                        </ul>
                                        <p class="media">{{ $comment->comment }}</p>
                                    </div>

                                </div>
                                <hr style="padding: 10px">
                            @endforeach

                        </div>
                        <div class="detailsInfoBox">
                            <!-- Button trigger for review modal  -->
                            <div class="listingReview" style="padding-top: 10px">
                                <button type="button" class="btn btn-primary reviewBtn" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Write a review
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="exampleModalLabel">Write a Review</h4>
                                        </div>

                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <form class="ratingForm" action="{{route('rating.store')}}"
                                                      method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="userName">Username</label>
                                                        <input type="text" name="username" placeholder="Username"
                                                               value="{{old('username')}}"
                                                               class="form-control">
                                                        @if ($errors->has('username'))
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Email</label>
                                                        <input type="email" name="email" placeholder="Email"
                                                               value="{{old('email')}}"
                                                               class="form-control">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">User photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="market_id" class="form-control"
                                                               value="{{$market_details->id}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Verify this marketplace
                                                            ({{ $market_details->name }}) </label>
                                                        <input type="checkbox" name="verify">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Rate {{ $market_details->name }} market
                                                            place</label>
                                                        <div class="rating2">
                                                            <label>
                                                                <input type="radio" name="rating" value="5"
                                                                       title="5 stars">
                                                                5
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="rating" value="4"
                                                                       title="4 stars">
                                                                4
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="rating" value="3"
                                                                       title="3 stars">
                                                                3
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="rating" value="2"
                                                                       title="2 stars">
                                                                2
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="rating" value="1"
                                                                       title="1 stars">
                                                                1
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="userName">Comment </label>
                                                        <textarea name="comment" class="form-control" rows
                                                                  rows="3"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary pull-left">Send
                                                            Review
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
