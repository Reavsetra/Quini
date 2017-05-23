<?php

namespace Quin\Http\Controllers;


use Quin\User;
use Quin\Combinacion;
use Quin\Sorteo;
use Quin\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CombinacionController extends Controller
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
        $sorteo = Sorteo::where('id',1)->first();
        $equipos = json_encode(Equipos::all());

        return view('usuario.nuevo-sorteo')->with(['sorteo'=> $sorteo])->with(['equipos'=> $equipos]);
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
        
        $sorteo = Sorteo::where('id',1)->first();
        
        $equipos = json_encode(Equipos::all());

        return view('usuario.combinacion')->with(['combinacion'=> $combinacion])->with(['sorteo'=> $sorteo])->with(['equipos'=> $equipos]);
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
