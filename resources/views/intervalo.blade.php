@extends('template')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="" action="{{ url('ordenamiento') }}" method="post">
          <div class="form-group">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
            <input type="num" name="secuencia[]" class="form-control" placeholder="Numero">
          </div>
          <div class="input-group">
            <input class="form-control" type="num" value="{{ old('intervalo')}}" name="intervalo" placeholder="Intervalo" required>
            <span class="input-group-btn">
              <input class="btn btn-primary pull-right" type="submit" value="Ordenar">
            </span>
          </div>

        {!! csrf_field() !!}

        </form>
      @endsection
      </div>
    </div>
  </div>
