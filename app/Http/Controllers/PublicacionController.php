<?php

namespace App\Http\Controllers;

use App\Publicacion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicacion = Publicacion::all();
        $data = json_encode($publicacion);

        dd($publicacion);

        // return view('Publicaciones.crear');
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
        $validacion = validator::make($request->all(),
            [
                'tipoPropiedad'            => 'required|max:50',

                'images'            => 'required|max:10',
                'dirección'   => 'required|max:1',
                'mtsCuadrados'             => 'email|unique:usuarios',
                'nrohabitaciones'          => 'required|min:6|max:10',
                'nrocamas'       =>'required',
                'tipoCamas'         =>'required',
                'nrobaños'            =>'required',
                'nrohuespedes'            =>'required',
                'internet'            =>'required',
                'wifi'            =>'required',
                'cocina'            =>'required',
                'calefaccion'            =>'required',
                'aa'            =>'required',
                'jacuzzi'            =>'required',
                'alarmaIncendio'            =>'required',
                'salidaEmergencia'            =>'required',
                'telefonoFijo'            =>'required',
                'aguaCaliente'            =>'required',
                'piscina'            =>'required',
                'areasVerdes'            =>'required',
                'restaurant'            =>'required',
                'playaPrivada'            =>'required',
                'observaciones'            =>'required',



            ]);


        if ($validacion->fails())

        {
            return redirect('Publicaciones/registro')->withInput()->withErrors($validacion);
        }

        /**
         * creo la publicacion y almaceno en la base de datos
         */

        Publicacion::create($request->all());

        return 'publicacion creada';


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }
}
