<?php

namespace Quin\Http\Controllers\Auth;

use Quin\User;
use Quin\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/usuario/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'nombre_usuario' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'email' => $data['email'],
            'nombre_usuario' => $data['nombre_usuario'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
