<?php

namespace App\Http\Controllers;
use App\Publicacion;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PublicacionFormRequest;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if($request){
                $query=trim($request->get('searchText'));   

                $publicaciones=Publicacion::orderBy('id','ASC')
                ->where('id','LIKE','%'.$query.'%') 
                ->paginate(3);
                return view('publicacion.index',["publicaciones"=>$publicaciones,"searchText"=>$query]);
                
            }

        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario=Usuario::orderBy('nombre','ASC')
        ->select('usuarios.nombre','usuarios.id')
        ->get();

        return view('publicacion.create')->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionFormRequest $request)
    {
        $publicaciones=new Publicacion;
        $publicaciones->titulo=$request->get('titulo');
        $publicaciones->cuerpo=$request->get('cuerpo');
        $publicaciones->usuarios_id=$request->get('usuarios_id');
        $publicaciones->save();
        return Redirect::to('publicacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicaciones=Publicacion::findOrFail($id);
        return view("publicacion.edit",["publicaciones"=>$publicaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publicaciones=Publicacion::findOrFail($id);
        $publicaciones->titulo=$request->get('titulo');
        $publicaciones->cuerpo=$request->get('cuerpo');
        $publicaciones->update();
        return Redirect::to('publicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicaciones=Publicacion::findOrFail($id);
        $publicaciones->delete();
        return Redirect::to('publicacion');
    }
}
