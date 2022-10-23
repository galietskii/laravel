@extends('web._layouts.layout')

@section('banner')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <div class="banner-info">
                <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Sed ut perspiciatis
                    unde omnis iste natus.<span>Excepteur sint occaecat cupidatat non proident</span></h1>
                <div class="banner-info1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul id="flexiselDemo1">
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/1.png" alt=" " class="img-responsive"/>
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/2.png" alt=" " class="img-responsive"/>
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/3.png" alt=" " class="img-responsive"/>
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 2
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                    <div class="more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

@endsection
