@extends('_layout')

@section('title','Cooks | Events')

@section('content')
    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->
    <!-- events -->
    <div class="events">
        <div class="container">
            <h1 class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Latest Events</h1>
            <div class="event-grids">
                @foreach($events as $event)
                    <div class="col-md-4 event-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="dte">{{ $event['date'] }}</p>
                        <img src="{{ asset($event['img']) }}" alt=" " class="img-responsive" />
                        <div class="nobis">
                            <a href="single.html">{!! $event['link'] !!}</a>
                        </div>
                        {!! $event['text'] !!}
                        <div class="more">
                            <a href="{{url('shownews/'.'$event->id')}}" class="hvr-curl-bottom-right">Read More</a>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <div class="featured-events">
                <h2 class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Featured Events</h2>
                <div class="featured-evnt">
                    <div class="col-md-8 featured-events-left wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h5>Nam libero tempore, cum soluta nobis est eligendi optio dignissimos
                            <span>cumque nihil impedit quo minus id quod maxime placeat</span></h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate
                            non provident, similique sunt in culpa qui officia deserunt mollitia
                            animi, id est laborum et dolorum fuga.
                            Nam libero tempore, cum soluta nobis est eligendi optio
                            cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                            Nam libero tempore, cum soluta nobis est eligendi optio
                            cumque nihil impedit quo minus id quod maxime placeat facere possimus,
                            omnis voluptas assumenda est, omnis dolor repellendus.</p>
                        <ul class="last1">
                            <li><a href="#">Temporibus autem quibusdam</a></li>
                            <li><a href="#">Et aut officiis debitis aut</a></li>
                            <li><a href="#">Necessitatibus saepe eveniet</a></li>
                            <li><a href="#">Ut et voluptates repudiandae</a></li>
                            <li><a href="#">Molestiae non recusandae earum</a></li>
                            <li><a href="#">Rerum hic tenetur a sapiente delectus</a></li>
                            <li><a href="#">Temporibus autem quibusdam</a></li>
                            <li><a href="#">Et aut officiis debitis aut</a></li>
                            <li><a href="#">Necessitatibus saepe eveniet</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 featured-events-right wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="images/9.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //events -->
@endsection
