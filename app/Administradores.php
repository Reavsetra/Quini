<?php

namespace Quin;

use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    protected $connection = 'administracion';
    protected $table = 'administradores';

    protected $fillable = ['nombre_admin','email','password','id_tipo_admin'];
}
