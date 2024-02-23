@extends('../layouts/master')

@section('content')
    <div class="card">
        <div class="card-header" style="background-color: #D6DBDF">
            <h2>{{ $chollo->titulo }}</h2>
        </div>
        <div class="row" >
            <div class="col-md-6">
                @if ($chollo->disponible)
                    <img class="card-img-top img-thumbnail img-fluid" src="img/{{$chollo->id}}-chollo-ofertas.png" alt="{{ $chollo->titulo }}">
                @else
                    <img class="card-img-top img-thumbnail img-fluid" src="img/{{$chollo->id}}-chollo-ofertas.png" alt="{{ $chollo->titulo }}" style="filter: blur(4px);">
                @endif
            </div>
            <div class="col-md-6" >
                <div class="card-body" >
                    <p><strong>Descripción:</strong> {{ $chollo->descripcion }}</p>
                    <p><strong>URL:</strong> <a href="{{ $chollo->url }}" target="_blank">Ir al chollo</a> </p>
                    <p><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
                    <p><strong>Puntuación:</strong> {{ $chollo->puntuacion }}</p>
                    <p><strong>Precio:</strong> {{ $chollo->precio }} €</p>
                    <p><strong>Precio con descuento:</strong> {{ $chollo->precio_descuento }} €</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('edit', $chollo->id) }}" class="btn btn-secondary">Editar</a>
    <form action="{{ route('destroy', $chollo->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
    <a href="{{ route('index') }}" class="btn btn-danger float-right">Cerrar</a>
@endsection
