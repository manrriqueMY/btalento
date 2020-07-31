<!DOCTYPE HTML>
<html>
    <head>
        <title>Talento Inclusivo</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1" />        
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/all.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/font-awesome-animation.min.css">        
        <link rel="stylesheet" href="/assets/plugins/slick/slick.css">
        <link rel="stylesheet" href="/assets/css/custom/style.css"/>

        <link rel="stylesheet" href="/assets/css/custom/login.css">
        @stack('css')
    </head>
    <body>
        @include('layouts.navbar')
        @yield('content')

        @include('modal.login')
        @include('modal.contactanos')

        @include('layouts.footer')        
        
        <script src="/assets/js/app.js"></script>
        <script src="/assets/plugins/slick/slick.js"></script>

        <script src="/assets/js/custom/login.js"></script>
        @stack('js')
    </body>
</html>