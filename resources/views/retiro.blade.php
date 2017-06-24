@extends('template')
@section('contenido')
  <div class="container">
    <div class="row">
      @foreach ($billetes as $billete)
        <div class="col-sm-1 col-xs-3 billete billetede{{ $billete }}">
          <h3 class="text-center">${{ $billete }}</h3>
        </div>
      @endforeach

    </div>
  </div>
@endsection
