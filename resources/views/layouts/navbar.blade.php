<!-- HEADER -->
<header id="pageTop" class="header">

    <!-- TOP INFO BAR -->

    {{--<div class="nav-wrapper ">--}}
    <div class="nav-wrapper @yield('nvClass')">
        <!-- NAVBAR -->
        {{--<nav id="menuBar" class="navbar navbar-default transparent-navbar" role="navigation">--}}
        <nav id="menuBar" class="navbar navbar-default @yield('nvClass2')" role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{asset('img/logo.png')}}" alt="" class="xm-logo-white">
                        <img src="{{asset('img/logo_black.png')}}" alt="" class="xm-logo-black">
                        <img src="{{asset('img/logo_black.png')}}" alt="" class="xm-logo-black_whitebg">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="homeBtn" class=""><a href="{{route('home')}}">Home </a></li>
                        <li id="marketsBtn" class=""><a href="{{route('shop.index')}}">Markets </a></li>
                    </ul>
                </div>
                <a id="addMarketBtn" class="btn btn-default navbar-btn" href="{{ route('shop.create') }}"> + <span>Add Market</span></a>
            </div>
        </nav>
    </div>
</header>
