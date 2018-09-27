@extends('layouts.baseApp')

@section('title','Add Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong> {{ session('status') }}</strong>, your market is available now.
                        </div>
                    @endif
                    <form action="{{ route('shop.store') }}" method="post" class="listing__form" enctype="multipart/form-data">
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>About</h3>
                                <p>Please provide accurate marketplace information and we are not responsible for adding
                                    inacurate information and it will cause removing your marketplace automatically
                                    based on public verification.</p>
                                <div class="row">
                                    {{--error validation--}}
                                    @csrf


                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingTitle">Market Title</label>
                                        <input type="text" class="form-control" name="name" id="listingTitle"
                                               placeholder="Market Title">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingCategory">Type</label>
                                        <div class="contactSelect">
                                            <select name="type" id="guiest_id9" class="select-drop">

                                                @foreach($types as $type)
                                                    <option value="{{$type->type}}">{{$type->type}}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        @if ($errors->has('type'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="discribeTheListing">Description</label>
                                        <textarea name="description" class="form-control" rows="3"
                                                  placeholder="Description"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Contact</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingRegion">Country</label>
                                        <div class="contactSelect">
                                            <select name="country" id="guiest_id19" class="select-drop">
                                                <option value="0">Korea</option>
                                                <option value="1">Japan</option>
                                                <option value="2">Thaiwan</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="listingAddress"
                                               placeholder="Market Address">

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingPhone">Phone</label>
                                        <input type="number" name="phone_num" class="form-control" id="listingPhone"
                                               placeholder="0450 123 456">
                                        @if ($errors->has('phone_num'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_num') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingEmail">Email</label>
                                        <input type="email" name="email" class="form-control" id="listingEmail"
                                               placeholder="market@market.com">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingWebsite">Website</label>
                                        <input type="text" name="website" class="form-control" id="listingWebsite"
                                               placeholder="http://">

                                        @if ($errors->has('website'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Gallery</h3>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                       {{-- <div class="imageUploader text-center">
                                            <div class="file-upload">
                                                <div class="upload-area">--}}
                                                    <input type="file" name="image" class="file">
                                                    <button class="browse" type="button">Click here to upload your
                                                        market banner image
                                                    </button>
                                                {{--</div>
                                            </div>
                                        </div>--}}
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Social</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="facebookUrl">Facebook URL</label>
                                        <input type="text" name="fb_url" class="form-control" id="facebookUrl"
                                               placeholder="http://facebook.com/example">
                                        @if ($errors->has('fb_url'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fb_url') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="twitterUrl">Twitter URL</label>
                                        <input type="text" name="twitter_url" class="form-control" id="twitterUrl"
                                               placeholder="http://twitter.com/example">
                                        @if ($errors->has('twitter_url'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter_url') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="youtubeUrl">You Tube URL</label>
                                        <input type="text" name="youtube_url" class="form-control" id="youtubeUrl"
                                               placeholder="http://youtube.com/example">
                                        @if ($errors->has('youtube_url'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('youtube_url') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Opening Hours</h3>
                                <p>Example: 10.00am - 5.00pm or 10.00 - 17.00</p>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="mondayTime">Monday</label>
                                        <input type="text" name="monday" class="form-control" id="mondayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('monday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('monday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="tuesdayTime">Tuesday</label>
                                        <input type="text" name="tuesday" class="form-control" id="tuesdayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('tuesday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tuesday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="wednesdayTime">Wednesday</label>
                                        <input type="text" name="wednesday" class="form-control" id="wednesdayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('wednesday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wednesday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="thrusdayTime">Thrusday</label>
                                        <input type="text" name="thursday" class="form-control" id="thrusdayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('thursday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('thursday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="fridayTime">Friday</label>
                                        <input type="text" name="friday" class="form-control" id="fridayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('friday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('friday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="saturdayTime">Saturday</label>
                                        <input type="text" name="saturday" class="form-control" id="saturdayTime"
                                               placeholder="10.00am - 5.00pm">
                                        @if ($errors->has('saturday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('saturday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="sundayTime">Sunday</label>
                                        <input type="text" name="sunday" class="form-control" id="sundayTime"
                                               placeholder="Closed">
                                        @if ($errors->has('sunday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sunday') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center">
                            <button type="submit" class="btn-submit btn-default-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
