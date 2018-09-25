
@extends('layouts.root')

@section('content')



{!!Form::open(array('url'=>'clients', 'method'=>'POST', 'autocomplete'=>'off', 'role' => 'search'))!!}
    
   
    <!-- ... -->
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
    <div class="">
        <div class="form-group justify-content-center">
            <div  class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="DIGITE SEU NOME">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="registration" name="registration" value="{{ old('registration') }}" placeholder="DIGITE SUA MATRICULA">
            </div>
            <div class="row form-group">
                
                <div class="col-6">
                    {!! Form::select('location',['' => 'SELECIONE SUA UNIDADE', 'MG' => 'MG', 'SP' => 'SP', 'RJ' => 'RJ' ] , ['placeholder' => 'awesome']);!!}
                    {{-- <select name="" id="location" name="location" value="{{ old('location') }}" placeholder="SELECIONE SUA UNIDADE">
                            <option selected>Escolha...</option>
                            <option value="MG" {{old('location') == "MG" ?'selected="selected"': ''}}>MG</option>
                            <option value="SP" name="location">SP</option>
                            <option value="RJ" name="location">RJ</option>
                    </select> --}}
                    {{-- <input type="select" id="shirtSize" name="shirtSize" value="{{ old('shirtSize') }}" placeholder="TAMANHO DA SUA CAMISA"> --}}
                </div>
                <div class="col-6">
                    <div class="">
                        {!! Form::select('shirtSize',['' => 'TAMANHO DA SUA CAMISA', 'M' => 'M', 'G' => 'G', 'GG' => 'GG' ]);!!}
                    </div>
                        
                    {{-- <select name="" id="shirtSize" name="shirtSize" value="{{ old('shirtSize') }}" placeholder="SELECIONE SUA UNIDADE">
                            <option selected>Escolha...</option>
                            <option value="P"> P</option>
                            <option value="M"> M</option>
                            <option value="G"> G</option>
                            <option value="GG">GG</option>
                    </select> --}}
                    {{-- <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="TAMANHO DA SUA CAMISA"> --}}
                </div>
            </div>
            <div>
                <p><b>DIGITE 1(UMA) PALAVRA QUE REPRESENTE O SEU SENTIMENTO DE ESTAR NO GRUPO MOPAR.</b></p>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" id="word" name="word" value="{{ old('word') }}" placeholder="DIGITE UMA PALAVRA QUE REPRESENTA SEU SENTIMENTO COM A MOPAR">
            </div>
            <button type="submit" class="btn btn-custom">ENVIAR PALAVRA</button>        </div>
    </div>
    
{{Form::close()}}
@stop