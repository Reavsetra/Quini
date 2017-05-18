<?php

namespace Quin\Http\Controllers;


use Quin\User;
use Quin\Combinacion;
use Quin\Sorteo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SorteoController extends Controller
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
        //
        $combinaciones = Combinacion::where('id_usuario', Auth::user()->id_usuario)->get();
        
        return view('usuario.sorteos')->with(['combinaciones'=> $combinaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sorteo = 

        return view('usuario.nuevo-sorteo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $combinacion = Combinacion::create($request->only('id_usuario', 'id_sorteo', 'combinacion'));

        return redirect()->route('sorteos.index', ['id' =>  Auth::user()->nombre_usuario]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user, $id)
    {
        $combinacion = Combinacion::where('combinaciones.id', $id)->join('sorteos', 'sorteos.id', '=', 'combinaciones.id_sorteo')->select('combinaciones.*', 'sorteos.alineacion', 'sorteos.fecha_inicio')->first();

        return view('usuario.combinacion')->with(['combinacion'=> $combinacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
