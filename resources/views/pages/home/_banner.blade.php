<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="banner-info">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Sed ut perspiciatis unde omnis iste natus.<span>Excepteur sint occaecat cupidatat non proident</span></h1>
            <div class="banner-info1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul id="flexiselDemo1">
                    @foreach($banners as $banner)
                        <li>
                            <div class="banner-info1-grid">
                                <img src="{{ asset($banner['img']) }}" alt=" " class="img-responsive" />
                                <h3>{{ $banner['title'] }}</h3>
                                {!! $banner['description'] !!}
                            </div>
                        </li>
                    @endforeach
                </ul>
                @push('scripts')
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems:2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 2
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
                @endpush
                <div class="more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
