<?php

namespace Quin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Combinacion extends Model
{
    //
    protected $table = 'combinaciones';

    protected $fillable = ['id_usuario', 'id_sorteo', 'combinacion'];
}
