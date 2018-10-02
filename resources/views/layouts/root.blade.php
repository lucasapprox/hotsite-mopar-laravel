<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mopar</title>

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
        <div class="container-fluid" style="display:grid;">
                <div class="row container-fluid">
                    <div class="col-md-12 container-root">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row container-fluid adjust">
                                    <h1><p class="pMargin">PARA VOCÊ,</p><p class="pMargin"><b>QUAL É A MAIOR FORÇA</b></p><P>DO TIME MOPAR?</P></h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <main class="">
                                            @yield('content');
                                        </main>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mobileDiv" style="position:relative">
                                <div class="col-sm-6 col-md-12 col-xs-6 mobileImg" style="position:relative">
                                    
                                    <img id="img1" src="images/itens1.png" alt="">
                                    
                                </div>
                                <div class="col-sm-6 col-md-12 col-xs-6 mobileImg" id="div1">
                                    
                                    <img id="img2" src="images/branca.png" alt="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        {{-- <div class="container-fluid">
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
            </div> --}}



    
</body>
</html>
