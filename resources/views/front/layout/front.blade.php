<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield("title") </title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>


@include("front.inc.topNav")

@if(Request::path() == "/")
    <div class="container-fluid">
        <div class="row">
            @include("front.inc.carousel")
        </div>
    </div>
@endif


<div class="container">

    <div class="row">

        <div class="col-md-3 mt-4">
            @include("front.inc.sideNav")
        </div>

        <div class="col-md-9 mt-4">
            @include("inc.sessionMessages")
            @yield('content')
            @include("inc.errorMessages")
        </div>

    </div>

</div>


<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a9dca5f1af40e97"></script>

@yield("scripts")
</body>
</html>
