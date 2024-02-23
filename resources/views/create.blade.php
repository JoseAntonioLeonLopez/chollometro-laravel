@extends('../layouts/master')

@section('content')
    <h2>Crear un Chollo</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
        </div>
        <div class="form-group">
            <label for="puntuacion">Puntuación</label>
            <input type="number" class="form-control" min="1" max="10" id="puntuacion" name="puntuacion">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" step="0.01" id="precio" name="precio">
        </div>
        <div class="form-group">
            <label for="precio_descuento">Precio con descuento</label>
            <input type="number" class="form-control" step="0.01" id="precio_descuento" name="precio_descuento">
        </div>
        <div class="form-group">
            <input type="radio" id="disponible" name="disponible" value="true"> Disponible
            <input type="radio" id="disponible" name="disponible" value="false"> No disponible
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
