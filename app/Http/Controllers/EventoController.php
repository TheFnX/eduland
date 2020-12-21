<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use App\Categoria;
use File;
use DB;
use Image;
use Session;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
        $nombre= $request->get('buscarpor');
        $evento = Evento::where('nombre','like',"%$nombre%")->latest()->paginate(10);
        
        return view('evento.index', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all()->sortBy('nombre');
        return view('evento.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = null;
        $mensaje= 'Evento Registrado correctamente'; 
        //dd($request); 

        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'duracion' => 'nullable',
            'fecha' => 'nullable',
            'hora_inicio' => 'nullable',
            'trainer1' => 'nullable',
            'trainer2' => 'nullable',
            'trainer3' => 'nullable',
            'precio' => 'nullable',
            'contenido' => 'nullable',
            'imagen' => 'nullable|image',
            'descripcion' => 'nullable',
            'estado' => 'required',            
            'categoria_id' => 'nullable',
            'user' => 'nullable',
        ]);


        DB::beginTransaction();
        $requestData = $request->all();
        // dd($requestData);  

        if($request->imagen){
           
            $data = $request->imagen;
            
            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension(); 
            $extension = explode('images/eventos', mime_content_type('images/eventos'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info; 
            $path  = 'images/eventos';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName; 
            if($image->save($img)) {
                $requestData['imagen'] = $img;
                $mensaje = "Evento Registrado correctamente";    
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }

        $evento = Evento::create($requestData);

        if($evento){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message',$mensaje);
            return redirect()->route('evento.create'); 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
