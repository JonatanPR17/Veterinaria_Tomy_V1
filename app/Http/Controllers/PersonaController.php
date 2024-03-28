<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //Esta es la funcion para la ruta donde tendremos a todas las persona
    public function index()
    {
        $personas = Persona::orderBy('id', 'asc')->get();
        $personas = Persona::paginate();
        return view('persona.index' , compact ('personas'));
    }

    //Esta es la funcion para la ruta donde crearemos a todas las persona
    public function create()
    {
        return view('persona.create');
    }

    //
    public function update()
    {
        return view('persona.update');
    }

    //
    public function remove($persona)
    {
        return "Estoy eliminado el registro de $persona, esto ya no existira mas";
    }
}
