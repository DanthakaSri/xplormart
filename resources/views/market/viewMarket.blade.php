@extends('layouts.baseApp')

@section('title','View Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            width: 8em;
        }

        .rating input {
            position: absolute;
            left: -999999px;
        }

        .rating label {
            display: inline-block;
            font-size: 0;
        }

        .rating > label:before {
            position: relative;
            font: 24px/1 FontAwesome;
            display: block;
            content: "\f005";
            color: #ccc;
            background: -webkit-linear-gradient(-45deg, #d9d9d9 0%, #b3b3b3 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > label.selected:before,
        .rating > label.selected ~ label:before {
            color: #f0ad4e;
            background: -webkit-linear-gradient(-45deg, #fcb551 0%, #d69a45 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


    </style>

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

                            <!-- Button trigger for review modal  -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                Write a review
                            </button>
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
                            <!-- Button trigger for review modal  -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                Write a review
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Write a Review</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <form class="loginForm">
                                                    <div class="form-group">
                                                        <label for="userName">Username *</label>
                                                        <input type="text" name="username" placeholder="Username" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Email *</label>
                                                        <input type="email" name="email"  placeholder="Email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">User photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Verify {{ $market_details->name }} market place</label>
                                                        <input type="checkbox" name="verify" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">User photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>

                                                   {{-- <label for="input-1" class="control-label">Rate This</label>
                                                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1">
--}}

                                                    <div class="rating">
                                                        <label>
                                                            <input type="radio" name="rating" value="5" title="5 stars"> 5
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="4" title="4 stars"> 4
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="3" title="3 stars"> 3
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="2" title="2 stars"> 2
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="1" title="1 stars"> 1
                                                        </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Comment </label>
                                                        <textarea name="comment" class="form-control" rows="3"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary pull-left">Send Review
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{--<div class="listingReview">
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
                            </form>--}}
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

    <script>
        $('.rating input').change(function () {
            var $radio = $(this);
            $('.rating .selected').removeClass('selected');
            $radio.closest('label').addClass('selected');
        });
    </script>
@endsection
