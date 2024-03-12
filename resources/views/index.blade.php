@extends('../layouts/master')

@section('content')

    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Crear Nuevo Chollo</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @foreach($chollosList as $chollo)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem; height: 25rem;">
                    @if ($chollo->disponible)
                        <img class="card-img-top" src="img/{{$chollo->id}}-chollo-ofertas.png" alt="{{ $chollo->titulo }}" style="height: 200px;">
                    @else
                        <img class="card-img-top" src="img/{{$chollo->id}}-chollo-ofertas.png" alt="{{ $chollo->titulo }}" style="height: 200px; filter: blur(4px);">
                    @endif
                    <div class="card-body" style="background-color: #D6DBDF">
                        <h5 class="card-title">{{ $chollo->titulo }}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{ $chollo->categoria }}</p>
                        <p><del class="text-muted">{{ $chollo->precio }}€</del> {{ $chollo->precio_descuento }}€</p>
                        <a href="{{ route('show', $chollo->id) }}" class="btn btn-primary">Ver más</a>
                        <a href="{{ route('edit', $chollo->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('destroy', $chollo->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
