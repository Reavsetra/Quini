<?php

namespace Quin;

use Illuminate\Database\Eloquent\Model;

class Combinacion extends Model
{
    //
    protected $table = 'combinaciones';

    protected $filable = ['id_usuario', 'id_sorte', 'combinacion'];
}
