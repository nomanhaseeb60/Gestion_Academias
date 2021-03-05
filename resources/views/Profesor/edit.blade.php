@extends("Profesor.layout")

@section("opciones")
    <a href="{{route("profesor.index")}}" class="btn btn-primary mb-5" role="button" aria-pressed="true"><i class="fa fa-home">Home</i></a>
@endsection
@section("contenido")
    <div class="container-sm">
        <form action="{{route("profesor.update",$profesor)}}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$profesor->nombre}}">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" value="{{$profesor->apellidos}}">
            </div>
            <div class="form-group">
                <label for="dni">Dni</label>
                <input type="text" name="dni" class="form-control" id="dni" value="{{$profesor->dni}}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" id="correo" value="{{$profesor->correo}}">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="{{$profesor->telefono}}">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="{{$profesor->direccion}}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
        </form>
    </div>
@endsection

