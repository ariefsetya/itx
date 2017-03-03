<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Indonesian Trainz X adalah website portal penyedia konten Kereta Simulator Indonesia (Trainz Simulator). Kami sendiri juga menyediakan beberapa konten kreasi kami yang bisa di download pada setiap detail addons yang dengan status Freeware.">
        <meta name="keywords" content="ITX, Indonesian Trainz X, Trainz Portal, Trainz Simulator">
        <meta name="author" content="Indonesian Trainz X">

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Indonesian Trainz X</title>

        <link href="{{Storage::url('css/metro.css')}}" rel="stylesheet">
        <link href="{{Storage::url('css/metro-icons.css')}}" rel="stylesheet">
        <link href="{{Storage::url('css/metro-responsive.css')}}" rel="stylesheet">
        <link href="{{Storage::url('css/metro-schemes.css')}}" rel="stylesheet">
        <link href="{{Storage::url('css/metro-rtl.css')}}" rel="stylesheet">

        <link href="{{Storage::url('css/docs.css')}}" rel="stylesheet">

        <script src="{{Storage::url('js/jquery.min.js')}}"></script>
        <script src="{{Storage::url('js/metro.js')}}"></script>
        <script src="//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </head>
    <body>
        @include('header')
        <div class="container page-content">
            <hr>
            <h1>Indonesian Trainz X</h1>
            <hr>
            <div class="panel">
                <div class="heading">
                    <span class="title">Selamat Datang di Indonesian Trainz X</span>
                </div>
                <div class="content">
                    <img src="{{Storage::url('images/banner.jpg')}}">
                </div>
            </div>
            <hr>

            @yield('content')
        </div>
    </body>
</html>