@if($errors->any() or session('success') or session('primary') or session('error'))
    @php
        if(session('success'))
        {
            $color = 'success';
        }
        elseif(session('primary'))
        {
            $color = 'primary';
        }
        elseif($errors->any() or session('error'))
        {
            $color = 'danger';
        }
    @endphp


{{--    <div class="alert alert-{{ $color }} alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2" role="alert">--}}
{{--        <div>--}}
            @if(session('success'))
                {!! session()->get('success') !!}
            @elseif(session('primary'))
                {!! session()->get('primary') !!}
            @elseif(session('error'))
                {!! session()->get('error') !!}
            @elseif($errors->any())
                <ul>
                    @forelse($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @empty
                        <li>{!! session()->get('error') !!}</li>
                    @endforelse
                </ul>
            @endif
{{--        </div>--}}
{{--        <button type="button" class="btn btn-link mb-0 text-end" data-bs-dismiss="alert" aria-label="Close">--}}
{{--            <i class="bi bi-x-lg text-dark"></i>--}}
{{--        </button>--}}
{{--    </div>--}}
@endif
