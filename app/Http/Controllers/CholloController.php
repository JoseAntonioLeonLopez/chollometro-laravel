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
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'disponible' => 'required',
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
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'disponible' => 'required',
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
