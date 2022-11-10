<li class="nav-item">
    <a href="{{ $route }}" class="nav-link @if(Route::is('*.events.*')) active @endif">
        {!! $icon !!}
        <p>
	        {{ $title_menu }}
            @isset($count)
                <span class="badge badge-info right">{{ $count }}</span>
            @endisset
        </p>
    </a>
</li>
