@extends('_layout')

@section('title','Cooks | Home')

@section('content')
    @include('pages.home.banner')
    @include('pages.home.banner_bottom')

    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-info">
                <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Newsletter</h3>
                <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">But who has any right to find fault with a man who chooses to enjoy
                    a pleasure that has no annoying consequences</p>
                <form class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <input type="mail" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}" required="">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- newsletter-bottom -->
    <div class="newsletter-bottom">{{ debug(123) }}
        <div class="container">
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>At vero eos et accusamus et iusto odio</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="images/4.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 newsletter-bottom-grid  wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>At vero eos et accusamus et iusto odio</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //newsletter-bottom -->
@endsection
