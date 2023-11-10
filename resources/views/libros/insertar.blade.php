@extends("paginamaestra")
@section("contenido")
<form method='post'>
@csrf
  <div class="form-group row">
    <label for="titulo" class="col-sm-2 col-form-label">titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo" value="{{$libro->titulo}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="autor" class="col-sm-2 col-form-label">autor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="autor" value="{{$libro->autor}}">
    </div>
  </div>
<button type="submit" class="btn btn-primary mb-2">Insertar</button>

</form>
@if($mensaje)
    <div class="alert alert-danger" role="alert">
    Error en base de datos:{{$mensaje}}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection()