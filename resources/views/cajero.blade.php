@extends('template')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="" action="{{ url('retiro') }}" method="post">
          <div class="input-group">
            <input class="form-control" type="num" value="{{ old('retiro')}}" name="retiro" placeholder="Cantidad a retirar (multiplos de 10)" required>
            <span class="input-group-btn">
              <input class="btn btn-primary pull-right" type="submit" value="Retirar">
            </span>
          </div>

        {!! csrf_field() !!}

        </form>
      @endsection
      </div>
    </div>
  </div>
