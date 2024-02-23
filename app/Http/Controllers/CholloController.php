<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class CholloController extends Controller
{
    public function index() {
        $chollosList = Chollo::all();
        return view("index", compact("chollosList"));
    }

    public function show($id) {
        $chollo = Chollo::find($id);
        return view("show", compact("chollo"));

    }

    public function create() {
        return view("create");
    }

    public function store(Request $c) {
        $c->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|numeric',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required',
        ], [
            'titulo.required' => 'El campo título es obligatorio.',
            'descripcion.required' => 'El campo descripción es obligatorio.',
            'url.required' => 'El campo URL es obligatorio.',
            'url.url' => 'El campo URL debe ser una URL válida.',
            'categoria.required' => 'El campo categoría es obligatorio.',
            'puntuacion.required' => 'El campo puntuación es obligatorio.',
            'puntuacion.numeric' => 'El campo puntuación debe ser un valor numérico.',
            'precio.required' => 'El campo precio es obligatorio.',
            'precio.numeric' => 'El campo precio debe ser un valor numérico.',
            'precio_descuento.required' => 'El campo precio con descuento es obligatorio.',
            'precio_descuento.numeric' => 'El campo precio con descuento debe ser un valor numérico.',
            'disponible.required' => 'El campo disponible es obligatorio.',
        ]);

        $chollo = new Chollo();

        $chollo->titulo = $c->titulo;
        $chollo->descripcion = $c->descripcion;
        $chollo->url = $c->url;
        $chollo->categoria = $c->categoria;
        $chollo->puntuacion = $c->puntuacion;
        $chollo->precio = $c->precio;
        $chollo->precio_descuento = $c->precio_descuento;
        $disponible = $c->disponible === 'true' ? true : false;
        $chollo->disponible = $disponible;

        $chollo->save();

        return redirect()->route('index')->with('success', 'Chollo creado correctamente.');
    }

    public function update($id, Request $c) {
        $c->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|numeric',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required',
        ], [
            'titulo.required' => 'El campo título es obligatorio.',
            'descripcion.required' => 'El campo descripción es obligatorio.',
            'url.required' => 'El campo URL es obligatorio.',
            'url.url' => 'El campo URL debe ser una URL válida.',
            'categoria.required' => 'El campo categoría es obligatorio.',
            'puntuacion.required' => 'El campo puntuación es obligatorio.',
            'puntuacion.numeric' => 'El campo puntuación debe ser un valor numérico.',
            'precio.required' => 'El campo precio es obligatorio.',
            'precio.numeric' => 'El campo precio debe ser un valor numérico.',
            'precio_descuento.required' => 'El campo precio con descuento es obligatorio.',
            'precio_descuento.numeric' => 'El campo precio con descuento debe ser un valor numérico.',
            'disponible.required' => 'El campo disponible es obligatorio.',
        ]);

        $chollo = Chollo::find($id);

        $chollo->titulo = $c->titulo;
        $chollo->descripcion = $c->descripcion;
        $chollo->url = $c->url;
        $chollo->categoria = $c->categoria;
        $chollo->puntuacion = $c->puntuacion;
        $chollo->precio = $c->precio;
        $chollo->precio_descuento = $c->precio_descuento;
        $disponible = $c->disponible === 'true' ? true : false;
        $chollo->disponible = $disponible;

        $chollo->save();

        return redirect()->route('index')->with('success', 'Chollo creado correctamente.');
    }

    public function edit($id)
    {
        $chollo = Chollo::find($id);
        return view('edit', compact('chollo'));
    }

    public function destroy($id)
    {
        $chollo = Chollo::find($id);
        $chollo->delete();

        return redirect()->route('index')
            ->with('success', 'Chollo eliminado correctamente.');
    }
}
