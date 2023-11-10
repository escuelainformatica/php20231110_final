@extends('paginamaestra')

@section('contenido')
<hr>
<a href="/libro/create" class="btn btn-primary mb-2">Insertar</a>&nbsp;&nbsp;&nbsp;
<a href="/logout" class="btn btn-primary mb-2">Logout</a>
<hr>
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection()
