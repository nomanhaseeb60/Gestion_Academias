@extends("Estudiante.layout")

@section("opciones")
    <a href="{{route("estudiante.index")}}" class="btn btn-primary mb-5" role="button" aria-pressed="true"><i class="fa fa-home">Home</i></a>
@endsection
@section("contenido")
    <div class="container-sm">
        <form action="{{route("estudiante.update",$estudiante)}}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$estudiante->nombre}}">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" value="{{$estudiante->apellidos}}">
            </div>
            <div class="form-group">
                <label for="dni">Dni</label>
                <input type="text" name="dni" class="form-control" id="dni" value="{{$estudiante->dni}}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" id="correo" value="{{$estudiante->correo}}">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="{{$estudiante->telefono}}">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="{{$estudiante->direccion}}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
        </form>
    </div>
@endsection
