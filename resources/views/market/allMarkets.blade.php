@extends('layouts.baseApp')

@section('title','All Markets')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')

    <section class="clerfix categoryGrid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="sidebarInner sidebarCategory">
                        <div class="panel panel-default">
                            <div class="panel-heading">Find Location</div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What are you looking for?"
                                       aria-describedby="basic-addon2">
                                <a href="#" class="input-group-addon" id="basic-addon2"><i class="fa fa-search"
                                                                                           aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebarInner sidebarCategory">
                        <div class="panel panel-default">
                            <div class="panel-heading">Filter by Area</div>
                            <div class="panel-body">
                                <ul class="list-unstyle categoryList">
                                    <li><a href="#">Dhaka</a></li>
                                    <li><a href="#">Chittagong</a></li>
                                    <li><a href="#">Rajshahi</a></li>
                                    <li><a href="#">Khulna</a></li>
                                    <li><a href="#">Barisal</a></li>
                                    <li><a href="#">Sylhet</a></li>
                                    <li><a href="#">Rangpure</a></li>
                                    <li><a href="#">Gazipure</a></li>
                                    <li><a href="#">Pabna</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebarInner sidebarCategory">
                        <div class="panel panel-default">
                            <div class="panel-heading">Related Categories</div>
                            <div class="panel-body">
                                <ul class="list-unstyle categoryList">
                                    @foreach($types as $type)
                                        <li><a href="#">{{$type->type}} markets</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">
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
                                                    <span class="fa-stack" style="width: 15px;">
                                                <li><i class="fa fa-star-o fa-stack-2x fa-2x" aria-hidden="true"></i></li>

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
                                            <a href="{{ route('shop.show',$market->id) }}"><h2>{{$market->name}}
                                                @if($market->verify_count > 5)
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    @endif

                                                </h2></a>
                                            <p><i class="fa fa-map-marker"  aria-hidden="true"></i> {{$market->street_address}}, {{$market->suburb}} <br> {{$market->country}}</p>
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
            </div>
        </div>
    </section>

@endsection
