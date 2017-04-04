<!DOCTYPE html>

<html style="overflow-x: auto;">
<head>
    <title>@lang('messages.website_title')</title>

	<meta name="google-site-verification" content="D5ZsoBH75_aEKD3g-nL6nrEsJ3ZIkHo_GYdpROJl1Gw" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/icon.png') }}"/>

    <!-- CSS -->
    <link href="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('/assets/css/common.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('/assets/css/layout_pc.css') }}" rel="stylesheet" >

    <!-- Javascript Libraries -->
    <script src="{{ URL::asset('/assets/plugin/jQuery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="header">
        <div class="top">
        </div>
        <div class="middle">
            <div class="social float-left">
                <a href="https://www.facebook.com/aliqhousing/" class="facebook float-left margin-l-10"></a>
                <a href="https://www.instagram.com/aliqhousing/" class="instagram float-left margin-l-10"></a>
                <a href="whatsapp://00962796681400" class="whatsapp float-left margin-l-10 log"></a>
                <a href="tel:00962788880904" class="phone float-left margin-l-10 margin-r-10 log"></a>
            </div>
            <div class="logo float-right"></div>
            <a href="{{ URL("/") }}" class="title center-pos"></a>
        </div>
        <div class="bottom back-color-title box-shadow-bottom">
            <div class="center-pos">
                <a href="tel:00962788880904" class="fst float-left log phone"></a>
                <a href="#house_2" class="snd float-left margin-l-3em"></a>
                <a href="#house_1" class="thd float-left margin-l-3em"></a>
                <a href="#house_3" class="fth float-left margin-l-3em"></a>
            </div>
        </div>
    </div>
    <input type="hidden" name="context_path" value="{{ URL("/") }}" />
    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
    	<input type="hidden" name="client" value="pc" />
        <div class="dot-line"></div>
        <div class="link">
            <div class="center-pos">
                <a href="tel:00962788880904" class="link-fst float-left log phone"></a>
                <div class="float-left"></div>
                <a href="#house_2" class="link-snd float-left"></a>
                <div class="float-left"></div>
                <a href="#house_1" class="link-thd float-left"></a>
                <div class="float-left"></div>
                <a href="#house_3" class="link-fth float-left"></a>
            </div>
        </div>
        <div class="copyright color-black">
            Copyright &copy; 2004 - 2016
        </div>
        <div class="bottom-text"></div>
        <div class="bottom-icon"></div>
        <div class="bottom"></div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>