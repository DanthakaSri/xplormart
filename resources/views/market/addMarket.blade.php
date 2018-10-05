@extends('layouts.baseApp')

@section('title','Add Market')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="{{ route('shop.store') }}" method="post" id="addMarketForm" class="listing__form"
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
                                        <label for="listingTitle"><span class="mandatory_field">*</span>Market Title</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="listingTitle"
                                               placeholder="Market Title">

                                        <span class="error_form" id="market_title_errorMsg"></span>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingCategory"><span class="mandatory_field">*</span>Type</label>
                                        <div class="contactSelect">
                                            <select name="type" id="marketType"  class="select-drop form-control">
                                            <option disabled selected value>Please select type</option>
                                                @foreach($types as $type)
                                                    <option value="{{$type->type}}">{{$type->type}}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <div class="otherTypeWrapper">
                                            <label for="otherType" class="otherTypelbl">Please specify</label>
                                            <input class="form-control"  name="otherType" type="text" id="otherType">
                                            </div>
                                        </div>

                                        @if ($errors->has('type'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="type_errorMsg"></span>
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
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingCountry"><span class="mandatory_field">*</span>Country</label>
                                        <div class="contactSelect">
                                            <select name="country" id="listingCountry" class="select-drop form-control">
                                            <option disabled selected value>Please select a country</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="country_errorMsg"></span>
                                    </div>


                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingAddress"><span class="mandatory_field">*</span>Street Address</label>
                                        <input type="text" name="street_address" value="{{ old('street_address') }}" class="form-control" id="listingAddress"
                                               placeholder="Street Address">

                                        @if ($errors->has('street_address'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="street_errorMsg"></span>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12">
                                     <div class="form-group col-sm-6 col-xs-12">
                                     <label for="listingPostcode"><span class="mandatory_field">*</span>Postcode</label>
                                        <input type="text" name="postcode" value="{{old('postcode')}}" class="form-control" id="listingPostcode"
                                               placeholder="Postcode">
                                         @if ($errors->has('postcode'))
                                             <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                         @endif
                                         <span class="error_form" id="postcode_errorMsg"></span>
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingSuburb"><span class="mandatory_field">*</span>Suburb</label>
                                        <input type="text" name="suburb" value="{{old('suburb')}}" class="form-control" id="listingSuburb"
                                               placeholder="Suburb">
                                        @if ($errors->has('suburb'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('suburb') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="suburb_errorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-xs-12">
                                    <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingCity"><span class="mandatory_field">*</span>City</label>
                                        <input type="text" name="city" value="{{old('city')}}" class="form-control" id="listingCity"
                                               placeholder="City">
                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="city_errorMsg"></span>
                                        </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingPhone"><span class="mandatory_field">*</span>Phone</label>
                                        <input type="text" name="phone_num" value="{{old('phone_num')}}" class="form-control" id="listingPhone"
                                               placeholder="(+xx) xxxxxxxxx">
                                        @if ($errors->has('phone_num'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_num') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="phone_errorMsg"></span>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingEmail"><span class="mandatory_field">*</span>Email</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="listingEmail"
                                               placeholder="market@market.com">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                        <span class="error_form" id="email_errorMsg"></span>
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
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Market Banner</h3>
                                <div class="row">
                                    <!-- banner default image credits - <a href="https://www.freepik.com/free-photo/laptop-and-shopping-bags-online-shopping-concept_1203166.htm">Designed by Snowing</a> -->
                                    <div class="form-group col-xs-12">
                                    <span class="imgUploadLabel">Recommended image size for the banner is more than (1300 width x 1000 height) pixcels.</span>
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
                                    <div class="col-xs-12 col-sm-12">
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
                                        <span class="error_form" id="monday_errorMsg"></span>
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
                                        <span class="error_form" id="tuesday_errorMsg"></span>
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
                                        <span class="error_form" id="wednesday_errorMsg"></span>
                                    </div>
                                        </div>

                                     <div class="col-xs-12 col-sm-12">

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
                                        <span class="error_form" id="thursday_errorMsg"></span>
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
                                        <span class="error_form" id="friday_errorMsg"></span>
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
                                        <span class="error_form" id="saturday_errorMsg"></span>
                                    </div>
                                        </div>

                                    <div class="col-xs-12 col-sm-12">

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
                                        <span class="error_form" id="sunday_errorMsg"></span>
                                    </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center">
                            <button type="submit" class="btn-submit btn-default-1" id="addMarketSubmit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
