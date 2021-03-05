@extends("Profesor.layout")

@section("opciones")
    <a href="/" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-home"></i></a>
    <a href="{{route("profesor.create")}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-plus-circle">Agregar</i></a>
@endsection
@section("contenido")
    <table class="table table-light">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dni</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Dirección</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach($profesores as $profesor)
            <tr>
                <td>{{$profesor->nombre}}</td>
                <td>{{$profesor->apellidos}}</td>
                <td>{{$profesor->dni}}</td>
                <td>{{$profesor->correo}}</td>
                <td>{{$profesor->telefono}}</td>
                <td>{{$profesor->direccion}}</td>
                <td><a href="{{route("profesor.edit",$profesor)}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a></td>
                <td><form action="{{route("profesor.destroy",$profesor)}}" method="post">
                        @method("DELETE")
                        <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                        @csrf
                    </form></td>
            </tr>
        @endforeach
    </table>
@endsection
