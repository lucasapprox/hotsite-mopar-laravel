<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/root.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    
    {{-- background-image --}}
    <style>
        background-image:url({{url('images/hotsite-03.jpg')}});
    </style> 
</head>
<body>
    <div id="app" class="container-root">
        <div class="h1-root row">
            <div class="col-8">
                <h1><p>PRA VOCÊ</p><p><b>O QUE SIGNIFICA</b></p><P>A MOPAR</P></h1>
            </div>
            <div class="col4">
                <img src="public/images/itens1.png" alt="">
            </div>
            
        </div>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
</body>
</html>
