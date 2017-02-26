<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
        <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
        <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Appbar :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>

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