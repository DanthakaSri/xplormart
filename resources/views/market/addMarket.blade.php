@extends('layouts.baseApp')

@section('title','Add Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="" method="" class="listing__form">
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>About</h3>
                                <p>Please provide accurate marketplace information and we are not responsible for adding inacurate information and it will cause removing your marketplace automatically based on public verification.</p>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingTitle">Market Title</label>
                                        <input type="text" class="form-control" id="listingTitle" placeholder="Market Title">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingCategory">Type</label>
                                        <div class="contactSelect">
                                            <select name="guiest_id9" id="guiest_id9" class="select-drop">
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
                                    <div class="form-group col-xs-12">
                                        <label for="discribeTheListing">Description</label>
                                        <textarea class="form-control" rows="3" placeholder="Description"></textarea>
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
                                            <select name="guiest_id19" id="guiest_id19" class="select-drop">
                                                <option value="0">Korea</option>
                                                <option value="1">Japan</option>
                                                <option value="2">Thaiwan</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingAddress">Address</label>
                                        <input type="text" class="form-control" id="listingAddress" placeholder="Listing Address">
                                    </div>

                                    <div class="form-group col-sm-6 col-sm-push-6 col-xs-12">
                                        <div class="mapArea">
                                            <div class="clearfix">
                                                <div id="map-canvas"></div>
                                            </div>
                                            <span class="help-block">Enter the exact address or drag the map marker to position</span>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingPhone">Phone</label>
                                        <input type="text" class="form-control" id="listingPhone" placeholder="0450 123 456">
                                    </div>

                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingEmail">Email</label>
                                        <input type="text" class="form-control" id="listingEmail" placeholder="market@market.com">
                                    </div>

                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingWebsite">Website</label>
                                        <input type="text" class="form-control" id="listingWebsite" placeholder="http://">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Gallery</h3>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <div class="imageUploader text-center">
                                            <div class="file-upload">
                                                <div class="upload-area">
                                                    <input type="file" name="img[]" class="file">
                                                    <button class="browse" type="button">Click or Drag images here</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label for="videoUrl">Video URL</label>
                                        <input type="text" class="form-control" id="videoUrl" placeholder="http://">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Social</h3>
                               <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="facebookUrl">Facebook URL</label>
                                        <input type="text" class="form-control" id="facebookUrl" placeholder="http://facebook.com/listty">
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="twitterUrl">Twitter URL</label>
                                        <input type="text" class="form-control" id="twitterUrl" placeholder="http://twitter.com/listty">
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="youtubeUrl">You Tube URL</label>
                                        <input type="text" class="form-control" id="youtubeUrl" placeholder="http://youtube.com/listty">
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
                                        <input type="text" class="form-control" id="mondayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="tuesdayTime">Tuesday</label>
                                        <input type="text" class="form-control" id="tuesdayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="wednesdayTime">Wednesday</label>
                                        <input type="text" class="form-control" id="wednesdayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="thrusdayTime">Thrusday</label>
                                        <input type="text" class="form-control" id="thrusdayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="fridayTime">Friday</label>
                                        <input type="text" class="form-control" id="fridayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="saturdayTime">Saturday</label>
                                        <input type="text" class="form-control" id="saturdayTime" placeholder="10.00am - 5.00pm">
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label for="sundayTime">Sunday</label>
                                        <input type="text" class="form-control" id="sundayTime" placeholder="Closed">
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
