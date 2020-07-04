<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearProyectoRequest;
use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $usuario= auth()->user()->name;
    	return view('proyecto.index',[ 'proyectos' => Proyecto::where('user', $usuario)->latest()->paginate('5')]);
    }
    public function show($id)
    {
    	return view('proyecto.show',[
    		'proyecto' => Proyecto::findOrFail($id)
    	]);
    }

    public function create()
    {
    	return view('proyecto.crear', [
            'proyecto' => new Proyecto
        ]);
    }

    public function store(CrearProyectoRequest $request)
    {
        //return $request->validated();
        Proyecto::create($request->validated());
        return redirect()->route('proyecto.index')->with('status','Proyecto creado correctamente');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyecto.editar',[
            'proyecto' => $proyecto
        ]);
    }

    public function update(Proyecto $proyecto, CrearProyectoRequest $request)
    {
        $proyecto->update($request->validated());
        return redirect()->route('proyecto.show', $proyecto )->with('status','Proyecto editado correctamente');;
    }

     public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyecto.index')->with('status','Proyecto eliminado correctamente');;
    }

}
