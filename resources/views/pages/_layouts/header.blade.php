<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <nav class="cl-effect-13" id="cl-effect-13">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}" @if(Route::is('home'))class="active"@endif>Home</a></li>
            <li><a href="{{ route('events.index') }}" @if(Route::is('events.*'))class="active"@endif>News & Events</a></li>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" @if(Route::is('services.*')) class="active"@endif>
                    Services <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('services.index') }}" @if(Route::is('services.*')) class="active"@endif>Door Delivery</a></li>
                    <li><a href="{{ route('services.index') }}">Direct Delivery</a></li>
                </ul>
            </li>
            <li><a href="{{ route('mail') }}" @if(Route::is('mail'))class="active"@endif>Mail Us</a></li>
        </ul>
    </nav>
    <div class="social-icons">
        <ul>cd 
            <li><a class="icon-link round facebook" href="#"></a></li>
            <li><a class="icon-link round p" href="#"></a></li>
            <li><a class="icon-link round twitter" href="#"></a></li>
            <li><a class="icon-link round dribble" href="#"></a></li>
        </ul>
    </div>
</div>
<!-- /.navbar-collapse -->
