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
    {{-- <script src="{{ asset('js/js.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/root.css') }}" rel="stylesheet">
    

    {{-- Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
    {{-- background-image --}}
    <style>
        background-image:url({{url('images/hotsite-03.jpg')}});
    </style> 
</head>
<link href="{{ asset('css/root.css') }}" rel="stylesheet">
<body>
        <div class="container-fluid">
                <div class="row container-root">
                    <div class="col-md-8">
                            <h1><p>PRA VOCÊ</p><p><b>O QUE SIGNIFICA</b></p><P>A MOPAR?</P></h1>
                    </div>
                    <div class="col-md-4">
                            
                            <img class="img" id="image1" src="images/itens1.png" alt="">
                        
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <main class="">
                            @yield('content')
                        </main>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img class="img" id="image2" src="images/branca.png" alt="">
                        </div>
                            
                    </div>
                </div>
            </div>



    {{-- <div id="app" class="container-root">
        <div class="h1-root">
            <div class="col-8 col-lg-8 col-sm-12 col-xs-12">
                <h1><p>PRA VOCÊ</p><p><b>O QUE SIGNIFICA</b></p><P>A MOPAR?</P></h1>
            </div>
            <div class="col-4 col-lg-4 col-sm-12">
                <div class="">
                    <img id="image1" src="images/itens1.png" alt="">
                    logo
                </div>
            </div>
            
        </div>
        <div class="row">
            <main class="py-4 col col-lg-6 col-sm-12">
                @yield('content')
            </main>
            <div class="col col-lg-6 col-sm-12">
                <img id="image2" src="images/branca.png" alt="">
            </div>
        </div>
        
        
        
    </div> --}}
</body>
</html>
