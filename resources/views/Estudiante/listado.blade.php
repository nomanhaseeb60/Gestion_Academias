@extends("Estudiante.layout")

@section("opciones")
    <a href="/" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-home"></i></a>
    <a href="{{route("estudiante.create")}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-plus-circle">Agregar</i></a>
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
        @foreach($estudiantes as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidos}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->correo}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>{{$alumno->direccion}}</td>
                <td><a href="{{route("estudiante.edit",$alumno)}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a></td>
                <td><form action="{{route("estudiante.destroy",$alumno)}}" method="post">
                        @method("DELETE")
                        <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                        @csrf
                    </form></td>
            </tr>
        @endforeach
    </table>
@endsection
