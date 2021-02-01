<?php

namespace App\Http\Controllers;

use App\AltaConciertos;
use Illuminate\Http\Request;

class AltaConciertosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre_concierto'=>'required',
            'fecha_realizacion'=>'required',
            'id_recinto'=>'required',
            'id_grupos'=>'required',
            'num_espectadores'=>'required',
            'id_promotor'=>'required',
            'id_medios'=>'required'
        ]);

        DB::table('conciertos')->insert([
            'nombre_concierto'=>$data['nombre_concierto'],
            'fecha_realizacion'=>$data['fecha_realizacion'],
            'id_recinto'=>$data['id_recinto'],
            'id_grupos'=>$data['id_grupos'],
            'num_espectadores'=>$data['num_espectadores'],
            'id_promotor'=>$data['id_promotor'],
            'id_medios'=>$data['id_medios']
        ]);

        //Redireccionar
        return redirect()->action('AltaConciertosController@index')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AltaConciertos  $altaConciertos
     * @return \Illuminate\Http\Response
     */
    public function show(AltaConciertos $altaConciertos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AltaConciertos  $altaConciertos
     * @return \Illuminate\Http\Response
     */
    public function edit(AltaConciertos $altaConciertos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AltaConciertos  $altaConciertos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AltaConciertos $altaConciertos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AltaConciertos  $altaConciertos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AltaConciertos $altaConciertos)
    {
        //
    }
}
