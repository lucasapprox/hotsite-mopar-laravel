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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/root.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    
    
    {{-- background-image --}}
    <style>
        background-image:url({{url('images/hotsite-03.jpg')}});
    </style> 
</head>
<link href="{{ asset('css/root.css') }}" rel="stylesheet">
<body>
    <div id="app" class="container-fluid container-root">
        <div class="h1-root row col-12">
            <div class="col-8">
                <h1><p>PRA VOCÊ</p><p><b>O QUE SIGNIFICA</b></p><P>A MOPAR?</P></h1>
            </div>
            <div class="col-4">
                <div>
                    <img id="image1" src="images/itens1.png" alt="">
                </div>
            </div>
            
        </div>
        <div class="row">
            <main class="py-4 col col-6">
                @yield('content')
            </main>
            <div class="col-6">
                <img id="image2" src="images/branca.png" alt="">
            </div>
        </div>
        
        
        
    </div>
</body>
</html>
