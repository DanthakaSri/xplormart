@extends('layouts.baseApp')

@section('title','Add Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="{{ route('shop.store') }}" method="post" class="listing__form"
                          enctype="multipart/form-data">
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>About Marketplace</h3>
                                <p>Please provide accurate marketplace information and we are not responsible for adding
                                    inacurate information and it will cause removing your marketplace automatically
                                    based on public verification.</p>
                                <div class="row">
                                    {{--error validation--}}
                                    @csrf


                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingTitle">Market Title</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="listingTitle"
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
                                            <select name="type" id="guiest_id9"  class="select-drop">

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
                                                  placeholder="Description">{{ old('description') }}</textarea>
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
                                <h3>Shop Details</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingRegion">Country</label>
                                        <div class="contactSelect">
                                            <select name="country" id="guiest_id19" class="select-drop">
                                                <option value="Korea">Korea</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Thaiwan">Thaiwan</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                    </div>


                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingAddress">Street Address</label>
                                        <input type="text" name="street_address" value="{{ old('street_address') }}" class="form-control" id="listingAddress"
                                               placeholder="Street Address">

                                        @if ($errors->has('street_address'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                     <div class="form-group col-sm-6 col-xs-12">
                                     <label for="listingPostcode">Postcode</label>
                                        <input type="text" name="postcode" value="{{old('postcode')}}" class="form-control" id="listingPostcode"
                                               placeholder="Postcode">
                                         @if ($errors->has('postcode'))
                                             <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                         @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingSuburb">Suburb</label>
                                        <input type="text" name="suburb" value="{{old('suburb')}}" class="form-control" id="listingSuburb"
                                               placeholder="Suburb">
                                        @if ($errors->has('suburb'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('suburb') }}</strong>
                                    </span>
                                        @endif
                                        </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingCity">City</label>
                                        <input type="text" name="city" value="{{old('city')}}" class="form-control" id="listingCity"
                                               placeholder="City">
                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif
                                        </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingPhone">Phone</label>
                                        <input type="number" name="phone_num" value="{{old('phone_num')}}" class="form-control" id="listingPhone"
                                               placeholder="0450 123 456">
                                        @if ($errors->has('phone_num'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_num') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingEmail">Email</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="listingEmail"
                                               placeholder="market@market.com">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingWebsite">Website</label>
                                        <input type="text" name="website" value="{{old('website')}}" class="form-control" id="listingWebsite"
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
                                <h3>Market Banner</h3>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        {{-- <div class="imageUploader text-center">
                                             <div class="file-upload">
                                                 <div class="upload-area">--}}
                                                 <input type="file" name="image" class="form-control" accept="image/*">
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
                                <h3>Social Media</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="facebookUrl">Facebook URL</label>
                                        <input type="text" name="fb_url"  value="{{old('fb_url')}}" class="form-control" id="facebookUrl"
                                               placeholder="http://facebook.com/example">
                                        @if ($errors->has('fb_url'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fb_url') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="twitterUrl">Twitter URL</label>
                                        <input type="text" name="twitter_url"  value="{{old('twitter_url')}}" class="form-control" id="twitterUrl"
                                               placeholder="http://twitter.com/example">
                                        @if ($errors->has('twitter_url'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter_url') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="youtubeUrl">You Tube URL</label>
                                        <input type="text" name="youtube_url" value="{{old('youtube_url')}}" class="form-control" id="youtubeUrl"
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
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="mondayTime">Monday</label>

                                        <input type="text" name="mondayFrom" class="form-control timePick" id="mondayTime"
                                               placeholder="From">
                                        <input type="text" name="mondayTo" class="form-control hours timePick" id="mondayTime"
                                               placeholder="To">

                                        @if ($errors->has('monday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('monday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="tuesdayTime">Tuesday</label>
                                        <input type="text" name="tuesdayFrom" class="form-control timePick" id="tuesdayTime"
                                               placeholder="From">
                                        <input type="text" name="tuesdayTo" class="form-control timePick hours" id="tuesdayTime"
                                               placeholder="To">
                                        @if ($errors->has('tuesday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tuesday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="wednesdayTime">Wednesday</label>
                                        <input type="text" name="wednesdayFrom" class="form-control timePick" id="wednesdayTime"
                                               placeholder="From">
                                        <input type="text" name="wednesdayTo" class="form-control timePick hours" id="wednesdayTime"
                                               placeholder="To">
                                        @if ($errors->has('wednesday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wednesday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="thrusdayTime">Thrusday</label>
                                        <input type="text" name="thursdayFrom" class="form-control timePick" id="thrusdayTime"
                                               placeholder="From">
                                        <input type="text" name="thursdayTo" class="form-control timePick hours" id="thrusdayTime"
                                               placeholder="To">
                                        @if ($errors->has('thursday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('thursday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="fridayTime">Friday</label>
                                        <input type="text" name="fridayFrom" class="form-control timePick" id="fridayTime"
                                               placeholder="From">
                                        <input type="text" name="fridayTo" class="form-control timePick hours" id="fridayTime"
                                               placeholder="To">
                                        @if ($errors->has('friday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('friday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="saturdayTime">Saturday</label>
                                        <input type="text" name="saturdayFrom" class="form-control timePick" id="saturdayTime"
                                               placeholder="From">
                                        <input type="text" name="saturdayTo" class="form-control timePick hours" id="saturdayTime"
                                               placeholder="To">
                                        @if ($errors->has('saturday'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('saturday') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="sundayTime">Sunday</label>
                                        <input type="text" name="sundayFrom" class="form-control timePick" id="sundayTime"
                                               placeholder="From">
                                        <input type="text" name="sundayTo" class="form-control timePick hours" id="sundayTime"
                                               placeholder="To">
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
