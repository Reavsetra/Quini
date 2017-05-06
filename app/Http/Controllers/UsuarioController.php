<?php

namespace Quin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view('usuario.index');
    }

    public function index()
    {
        return redirect('/usuario/'.Auth::user()->nombre_usuario);
    }
}
