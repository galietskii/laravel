<!DOCTYPE HTML>
<html>
<head>
    <title>
        @yield('title')
    </title>
    @include('pages._layouts.metas')
    @include('pages._layouts.links')
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            @include('pages._layouts.navbar_header')
            @include('pages._layouts.header')
        </nav>
    </div>
</div>
ERROR
@include('pages._layouts.messages')
END_ERROR
@yield('content')

@include('pages._layouts.footer')

@include('pages._layouts.scripts')

</body>
</html>
