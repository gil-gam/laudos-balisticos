<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui-1.12.1.custom/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/sweetalert2.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('fontawesome-free/css/all.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/dropzone.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/cropper.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    </head>
    <body>
        @include('layout.menu')
        <div id="content-wrapper">
            <div class="container-fluid">
                {{ Breadcrumbs::render() }}
                @include('flash_message')
                @yield('content')
            </div>

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Milena Mognon 2019</span>
                    </div>
                </div>
            </footer>
        </div>
        @include('layout.scripts')
    </body>
</html>
