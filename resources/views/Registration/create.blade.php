
@extends('layouts.root')

@section('content')


@include('registration.alert')
{!!Form::open(array('url'=>'clients', 'method'=>'POST', 'autocomplete'=>'off', 'role' => 'search'))!!}
    
   
    <!-- ... -->
    
    <div class="container-fluid">
            <p><b>PREENCHA OS CAMPOS COM SEUS DADOS PESSOAIS</b></p>
            <div>
                @if($errors->any())
                    <ul class="alert alert-danger">
                        
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li> 
                        @endforeach()
                        
                    </ul>
                @endif()
            </div>
        <div class="form-group justify-content-center" id="submitButton">
            <div  class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="DIGITE SEU NOME">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="registration" name="registration" value="{{ old('registration') }}" placeholder="DIGITE SUA MATRICULA">
            </div>
            <div class="row form-group">
                
                <div class="col-6">
                    {!! Form::select('location',['' => 'SELECIONE SUA UNIDADE', 
                    'Betim - Armazém' => 'Betim - Armazém', 
                    'Betim - Planta' => 'Betim - Planta', 
                    'Belo Horizonte' => 'Belo Horizonte', 
                    'Brasília' => 'Brasília', 
                    'Campinas' => 'Campinas', 
                    'Curitiba' => 'Curitiba', 
                    'Goiana' => 'Goiana', 
                    'Hortolândia - Armazém' => 'Hortolândia - Armazém', 
                    'Porto Alegre' => 'Porto Alegre', 
                    'Recife' => 'Recife', 
                    'Rio de Janeiro' => 'Rio de Janeiro', 
                    'São Paulo' => 'São Paulo' ] 
                    , ['placeholder' => 'awesome']);!!}
                    
                </div>
                <div class="col-6">
                    <div class="">
                        {!! Form::select('shirtSize',['' => 'TAMANHO DA SUA CAMISA', 'P' => 'P', 'PP' => 'PP', 'M' => 'M', 'G' => 'G', 'GG' => 'GG' ]);!!}
                    </div>
                    
                </div>
            </div>
            <div>
                <p><b>DIGITE 1(UMA) PALAVRA QUE REPRESENTE O SEU SENTIMENTO DE ESTAR NO GRUPO MOPAR.</b></p>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" id="word" name="word" value="{{ old('word') }}" placeholder="DIGITE UMA PALAVRA QUE REPRESENTA SEU SENTIMENTO COM A MOPAR">
            </div>
            <button class="btn btn-custom" onclick="success()">ENVIAR PALAVRA</button>       
        </div>
    </div>
    
{{Form::close()}}
@stop