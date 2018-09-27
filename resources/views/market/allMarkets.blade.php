@extends('layouts.baseApp')

@section('title','All Markets')
@section('nvClass','navbarWhite')
@section('nvClass2','lightHeader')

@section('content')
    <!-- CATEGORY GRID SECTION -->
    <section class="clerfix categoryGrid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="sidebarInner sidebarCategory">
                        <div class="panel panel-default">
                            <div class="panel-heading">Find Location</div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What are you looking for?" aria-describedby="basic-addon2">
                                <a href="#" class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                                   {{-- <li><a href="#">Chinese restaurants</a></li>
                                    <li><a href="#">Creole restaurants</a></li>
                                    <li><a href="#">Seafood</a></li>
                                    <li><a href="#">Thai restaurants</a></li>
                                    <li><a href="#">Street food</a></li>
                                    <li><a href="#">Japanese restaurants</a></li>
                                    <li><a href="#">Greek restaurants</a></li>--}}
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div class="resultBar">
                        <h2>We found <span>{{ $markets->count() }}</span> Results for you</h2>
                        <ul class="list-inline">
                            <li><a href="{{route('shop.index')}}"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i></a></li>
                            {{--<li class="active"><a href="category-list-right.html"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>--}}
                        </ul>
                    </div>
                    <div class="row">

                        @foreach($markets as $market)
                        <div class="col-sm-6 col-xs-12">
                            <div class="thingsBox thinsSpace" >
                                <div class="thingsImage">
                                    <img src="{{asset($market->image)}}" height="237px" width="368px" alt="{{$market->name}}">
                                    <div class="thingsMask">
                                        <ul class="list-inline rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <a href="{{ route('shop.show',1) }}"><h2>{{$market->name}} <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
                                        <p>{{$market->address}}</p>
                                        <p>{{$market->country}}</p>
                                    </div>
                                </div>
                                <div class="thingsCaption ">
                                    <ul class="list-inline captionItem">
                                        <li><a href="{{ route('shop.show',$market->id) }}">{{$market->type}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    {{--<div class="paginationCommon blogPagination categoryPagination">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>--}}

                    {{ $markets->links() }}
                </div>
            </div>
        </div>
    </section>


@endsection
