@extends('template')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Intervalo {{ $intervalo }}</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($ordenados as $numeros)
        <div class="row well">
          @foreach ($numeros as $numero)
            <div class="col-sm-1 col-xs-1">
              <h3 class="text-center">{{ $numero }}</h3>
            </div>
          @endforeach
        </div>


      @endforeach
    </div>
  </div>
@endsection
