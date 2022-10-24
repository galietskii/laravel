@extends('_layout')

@section('title','Cooks | Services')

@section('content')
    <div class="services">
        <div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Main Services</h1>
            <div class="service-grids">
                @foreach($services as $service)
                    <div class="col-md-4 service-grid">
                        <div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <img src="{{ asset($service['img']) }}" alt=" " class="img-responsive"/>
                            <div class="service-grd-pos">
                                <h4>{{ asset($service['title']) }}</h4>
                                <div class="more m2">
                                    <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                                </div>
                            </div>
                            <div class="service-grd-pos2">
                                <p>{{ asset($service['price']) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="service-grids">
                <div class="col-md-4 service-grid">
                    <div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="images/4.png" alt=" " class="img-responsive"/>
                        <div class="service-grd-pos">
                            <h4>eum fugiat quo nulla</h4>
                            <div class="more m2">
                                <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                            </div>
                        </div>
                        <div class="service-grd-pos2">
                            <p>$18 /-</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-grid">
                    <div class="service-grd wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="images/2.png" alt=" " class="img-responsive"/>
                        <div class="service-grd-pos">
                            <h4>eum fugiat quo nulla</h4>
                            <div class="more m2">
                                <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                            </div>
                        </div>
                        <div class="service-grd-pos2">
                            <p>$10 /-</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-grid">
                    <div class="service-grd wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="images/3.png" alt=" " class="img-responsive"/>
                        <div class="service-grd-pos">
                            <h4>eum fugiat quo nulla</h4>
                            <div class="more m2">
                                <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                            </div>
                        </div>
                        <div class="service-grd-pos2">
                            <p>$13 /-</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="services-grids">
                <h2 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Offered
                    Services</h2>
                <div class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-xs-2 services-grid-left">
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 services-grid-right">
                        <h4>necessitatibus saepe</h4>
                        <p>Aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                            voluptates repudiandae</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-xs-2 services-grid-left">
                        <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 services-grid-right">
                        <h4>necessitatibus saepe</h4>
                        <p>Aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                            voluptates repudiandae</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-xs-2 services-grid-left">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 services-grid-right">
                        <h4>necessitatibus saepe</h4>
                        <p>Aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                            voluptates repudiandae</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
