<!-- All markets view -->

@extends('layouts.baseApp')

@section('title','All Markets')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <section class="clerfix categoryGrid">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h1 style="padding-bottom: 10px;font-weight: 400">Market List</h1>
                    <div class="resultBar">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <strong> {{ session('status') }}</strong>, your market is available now.
                            </div>
                        @endif
                        <h2>We found <span>{{ $markets->count() }}</span> Results for you</h2>
                    </div>
                    <div class="row">

                        @foreach($markets as $market)
                            <div class="col-sm-6 col-xs-12">
                                <div class="thingsBox thinsSpace">
                                    <div class="thingsImage">
                                        <img src="{{$market->image}}" height="237px" width="368px"
                                             alt="{{$market->name}}">
                                        <div class="thingsMask">
                                            <ul class="list-inline rating">
                                                @foreach(range(1,5) as $i)
                                                    <span class="fa-stack" style="width: 3px; margin-right: 10px;">
                                                <li><i class="fa fa-star-o fa-stack-2x fa-2x"
                                                       aria-hidden="true"></i></li>

                                                        @if($market->avg_rating >0)
                                                            @if($market->avg_rating >0.5)
                                                                <li><i class="fa fa-star fa-stack-2x fa-2x"
                                                                       aria-hidden="true"></i></li>
                                                            @else
                                                                <li><i class="fa fa-star-half fa-stack-2x fa-2x"
                                                                       aria-hidden="true"></i></li>
                                                            @endif
                                                        @endif
                                                        @php $market->avg_rating--; @endphp
                                                    </span>
                                                @endforeach

                                            </ul>
                                            <a class="allMarkets" href="{{ route('shop.show',$market->id) }}">
                                                <h2>{{$market->name}}
                                                    @if($market->verify_count > 5)
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    @endif

                                                </h2></a>
                                            <p><i class="fa fa-map-marker"
                                                  aria-hidden="true"></i> {{$market->street_address}}
                                                , {{$market->suburb}} <br> {{$market->country}}</p>
                                        </div>
                                    </div>
                                    <div class="thingsCaption ">
                                        <ul class="list-inline captionItem">
                                            <li><a href="{{ route('shop.show',$market->id) }}">{{$market->type}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    {{ $markets->links() }}
                </div>
                <div class="col-sm-4 col-xs-12">

                    <div class="sidebarInner sidebarCategory">
                        <div class="mini-submenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                        <div class="list-group">
                        <span href="#" class="list-group-item active">
                            Market Categories
                            <span class="pull-right" id="slide-submenu">
                                <i class="fa fa-times"></i>
                            </span>
                        </span>

                            @foreach($types as $type)
                                <a href="{{route('searchT',$type->type)}}" class="list-group-item"><i
                                        class="fa fa-shopping-bag "></i> {{$type->type}} markets</a></li>
                            @endforeach

                            {{ $types->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
