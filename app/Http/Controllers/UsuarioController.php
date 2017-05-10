<?php

namespace Quin\Http\Controllers;

use Quin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_money()
    {
        
        $user = Auth::user();
        
        $user->creditos = encrypt(100);

        $user->save();

        return redirect('/usuario/'.Auth::user()->nombre_usuario);
    }

    public function show(){
        return view('usuario.index');
    }

    public function index()
    {
        return redirect('/usuario/'.Auth::user()->nombre_usuario);
    }


}
