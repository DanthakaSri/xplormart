<!-- HEADER -->
<header id="pageTop" class="header">

    <!-- TOP INFO BAR -->

    <div class="nav-wrapper navbarWhite">
        <!-- NAVBAR -->
        <nav id="menuBar" class="navbar navbar-default lightHeader animated " role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        {{--<svg class="logo-svg" version="1" xmlns="http://www.w3.org/2000/svg" width="140" height="44">
                            <path class="path-1" fill="" d="M0 44V0h139.813v44H0zM137.346 2.467H2.467v39.065h134.879V2.467z"/>
                            <path class="path-1" fill="" d="M120.927 22.389v11.095h-4.566V22.389a371.288 371.288 0 0 0-2.086-2.888 347.047 347.047 0 0 1-2.2-3.053 386.86 386.86 0 0 0-2.201-3.053c-.7-.959-1.395-1.922-2.086-2.888h5.617l5.255 7.287 5.222-7.287h5.649c.002 0-8.604 11.882-8.604 11.882zM98.034 33.484h-4.565V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-21.908 0H71.56V15.069h-6.372v-4.562h17.244v4.562h-6.306v18.415zm-17.425-1.789c-.69.623-1.511 1.116-2.463 1.477-.953.361-1.987.542-3.104.542-1.007 0-1.982-.143-2.923-.427a10.814 10.814 0 0 1-2.661-1.214h.033a9.928 9.928 0 0 1-1.577-1.215 18.73 18.73 0 0 1-.953-.952l3.416-3.151c.153.197.399.432.739.706.339.274.728.537 1.166.788.44.253.902.467 1.38.64.481.175.941.262 1.379.262.372 0 .744-.044 1.117-.131.359-.082.703-.22 1.018-.41.305-.185.564-.437.755-.739.197-.306.296-.689.296-1.149 0-.175-.06-.366-.181-.574-.12-.208-.329-.432-.624-.673-.296-.241-.706-.498-1.232-.771a20.567 20.567 0 0 0-1.971-.87 25.42 25.42 0 0 1-2.562-1.132 8.896 8.896 0 0 1-2.053-1.428 5.903 5.903 0 0 1-1.347-1.871c-.317-.7-.476-1.51-.476-2.429 0-.94.175-1.822.526-2.642a6.21 6.21 0 0 1 1.494-2.133c.646-.602 1.423-1.072 2.332-1.412.908-.339 1.911-.509 3.006-.509.591 0 1.22.077 1.889.23.668.153 1.319.35 1.954.591a12.95 12.95 0 0 1 1.79.837c.558.317 1.023.64 1.396.968l-2.825 3.545a15.71 15.71 0 0 0-1.281-.788 10.316 10.316 0 0 0-1.281-.558 4.311 4.311 0 0 0-1.478-.263c-.919 0-1.637.181-2.151.542-.515.361-.772.881-.772 1.559 0 .307.093.586.279.837.186.252.438.482.756.689.348.225.717.417 1.1.574.416.176.854.34 1.314.492 1.314.504 2.42 1.013 3.318 1.526.898.514 1.62 1.062 2.168 1.642s.936 1.204 1.166 1.871c.23.668.345 1.395.345 2.183 0 .963-.197 1.871-.591 2.724a6.803 6.803 0 0 1-1.626 2.216zM34.839 10.507h4.532v22.977h-4.532V10.507zm-20.036 0h4.566v18.415h9.263v4.563H14.803V10.507z"/>
                        </svg>--}}
                        <img src="{{asset('img/logo.png')}}" alt="" width="160" height="98">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        {{--<li class=" dropdown singleDrop">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a class="" href="index.html">Home Map</a></li>
                                <li><a class="" href="index-2.html">Home Travel</a></li>
                                <li><a class="" href="index-3.html">Home Automobile</a></li>
                                <li><a class="" href="index-4.html">Home City</a></li>
                            </ul>
                        </li>
                        <li class="active dropdown megaDropMenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listing <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="row dropdown-menu">
                                <li class="col-sm-4 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li><h5>listing Grids</h5></li>
                                        <li><a href="category-grid.html">Listing Grid Left</a></li>
                                        <li><a href="category-grid-right.html">Listing Grid Right</a></li>
                                        <li><a href="category-grid-full.html">Listing Grid Fullwidth</a></li>
                                        <li><h5>listing lists</h5></li>
                                        <li><a href="category-list-left.html">Listing list Left</a></li>
                                        <li><a href="category-list-right.html">Listing list Right</a></li>
                                        <li><a href="category-list-full.html">Listing list Full</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li><h5>listing Sidebar Map</h5></li>
                                        <li><a href="listing-sidebar-map-left.html">Listing Sidebar Map left</a></li>
                                        <li><a href="listing-sidebar-map-right.html">Listing Sidebar Map right</a></li>
                                        <li><a href="listing-sidebar-map-full.html">Listing Sidebar Map Full</a></li>
                                        <li><h5>listing Details</h5></li>
                                        <li><a href="listing-details-left.html">Listing Details Left</a></li>
                                        <li><a href="listing-details-right.html">Listing Details Right</a></li>
                                        <li><a href="listing-details-full.html">Listing Details Full</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li class="mega-img">
                                            <a href=""><img src="img/works/works-big-3.png" alt=""></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=" dropdown singleDrop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="terms-of-services.html">Terms and Conditions</a></li>
                                <li><a href="sign-up.html">Create Account</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="pricing-table.html">Pricing</a></li>
                                <li><a href="payment-process.html">Payment</a></li>
                                <li><a href="how-it-works.html">How It Works</a></li>
                                <li><a href="user-profile.html">User Profile</a></li>
                                <li><a href="comming-soon.html">Coming Soon</a></li>
                                <li><a href="404-page.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="blog.html">blog </a></li>
                        <li class=" dropdown singleDrop">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="add-listings.html">Add Listing</a></li>
                                <li><a href="edit-listings.html">Edit Listing</a></li>
                                <li><a href="booking-list.html">Booking List</a></li>
                                <li><a href="dashboard-reviews.html">Reviews</a></li>
                                <li><a href="listings.html">My Listings</a></li>
                                <li><a href="profile.html">My Profile</a></li>
                                <li><a href="oders.html">My Orders</a></li>
                                <li><a href="sign-up.html">Create Account</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="index.html">Log Out</a></li>
                            </ul>
                        </li>--}}

                        <li class=""><a href="blog.html">Home </a></li>
                        <li class=""><a href="blog.html">Listing </a></li>
                        {{--<li class=""><a href="blog.html">Blog </a></li>--}}
                    </ul>
                </div>
                <a class="btn btn-default navbar-btn" href="add-listings.html"> + <span>Add Market</span></a>
            </div>
        </nav>
    </div>
</header>
