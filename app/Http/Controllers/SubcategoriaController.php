<?php

namespace App\Http\Controllers;

use App\Subcategoria;
use Illuminate\Http\Request;
use App\Categoria;
use Session;


class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre= $request->get('buscarpor');
        $categoria = Categoria::all()->sortBy('nombre');
        $subcategoria = Subcategoria::where('nombre','like',"%$nombre%")->latest()->paginate(10);
        
        return view('subcategoria.index', compact('subcategoria','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all()->sortBy('nombre');
        $subcategoria = Subcategoria::all()->sortBy('nombre');
        return view('subcategoria.create', compact('subcategoria','categoria'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',            
        ]);

        Subcategoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,  
            'categoria_id' => $request->categoria_id,          
        ]);

        Session::flash('message','Subcategoria creado exisitosamente!');
        return redirect()->route('subcategoria.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategoria $subcategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategoria $subcategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategoria $subcategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategoria $subcategoria)
    {
        //
    }
}
