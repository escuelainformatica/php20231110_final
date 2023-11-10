@extends("paginamaestra")
@section("contenido")
<h1>login</h1>
<form method='post'>
@csrf
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{$usuario->email}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="password" id="password" placeholder="password" value="{{$usuario->password}}">
    </div>
  </div>
<button type="submit" class="btn btn-primary mb-2">Login</button>

</form>

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