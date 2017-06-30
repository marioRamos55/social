<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rol=null)
    {

        if(isset($rol))
        {
            $programas=Programa::Rol($roll)->get();

        }else
        {
            $programas= Programa::all()->load('users');
        }

        /** if($rol=='prestador')
        {
            $programas = Programa::with(['users'=>fuinction($query)
            {
                $query->where('rol','Prestador');

            }])-get();
        }elseif ($rol=='admin') {
            $programas= Programa::with(['users'=>function($query){
             $query->where('rol','admin');    
         }])->get();
            # code...
        }else
        {
            //$programas=programa::all()->load('users');
        }

        $programas=Programa::where('id',2)->get();
        return view('programa.indexPrograma',compact('programas'));*/
        //$programas=Programa::where('nombre','!=','finanzas')->where('horario','9.-6')->get();

        //para hace reportes 

            /**
                 * $programas=Programa::with('users'=>funtcion($query){
                 *$query->where('rol','prestador');
                 *}->get();
                 *
                 * @return \Illuminate\Http\Response
                 */



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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
