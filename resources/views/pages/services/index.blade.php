@extends('_layout')

@section('title','Cooks | Services')

@section('content')

    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->

    <div class="services">
        <div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Main Services</h1>

            <div class="service-grids">
                @foreach($services as $service)
                <div class="col-md-4 service-grid">
                    <div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="{{ asset($service['img']) }}" alt=" " class="img-responsive" />
                        <div class="service-grd-pos">
                            <h4>{{ $service['title'] }}</h4>
                            <div class="more m2">
                                <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                            </div>
                        </div>
                        <div class="service-grd-pos2">
                            <p>{{ $service['price'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>

            <div class="service-grids">
                @foreach($services as $service)
                    <div class="col-md-4 service-grid">
                        <div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <img src="{{ asset($service['img']) }}" alt=" " class="img-responsive" />
                            <div class="service-grd-pos">
                                <h4>{{ $service['title'] }}</h4>
                                <div class="more m2">
                                    <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                                </div>
                            </div>
                            <div class="service-grd-pos2">
                                <p>{{ $service['price'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <div class="services-grids">
                <h2 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Offered Services</h2>
                @foreach($grids as $grid)
                <div class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-xs-2 services-grid-left">
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 services-grid-right">
                        <h4>{{ $grid['title'] }}</h4>
                        <p>{!! $grid['content'] !!}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <div class="sevices-list-grids">
                <div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul>
                        <li><a href="#">Reprehenderit in voluptate</a></li>
                        <li><a href="#">Aute irure dolor in</a></li>
                        <li><a href="#">Resultant pleasure</a></li>
                        <li><a href="#">Annoying consequences</a></li>
                        <li><a href="#">Trivial example</a></li>
                        <li><a href="#">Fugiat nulla pariatur</a></li>
                    </ul>
                </div>
                <div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul>
                        <li><a href="#">Resultant pleasure</a></li>
                        <li><a href="#">Annoying consequences</a></li>
                        <li><a href="#">Trivial example</a></li>
                        <li><a href="#">Fugiat nulla pariatur</a></li>
                    </ul>
                </div>
                <div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul>
                        <li><a href="#">Reprehenderit in voluptate</a></li>
                        <li><a href="#">Aute irure dolor in</a></li>
                        <li><a href="#">Resultant pleasure</a></li>
                        <li><a href="#">Annoying consequences</a></li>
                        <li><a href="#">Trivial example</a></li>
                        <li><a href="#">Fugiat nulla pariatur</a></li>
                        <li><a href="#">Annoying consequences</a></li>
                        <li><a href="#">Trivial example</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection
