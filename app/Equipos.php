<?php

namespace Quin;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Equipos extends Model
{
    protected $connection ="administracion";
    protected $table ="equipos";
    protected $fillable = ['equipo','liga','path','updated_at', 'created_at'];

    public function setPathAttribute($path){
      $this->attributes['path']=Carbon::now()->second.$path->getClientOriginalName();
      $name = Carbon::now()->second.$path->getClientOriginalName();
      \Storage::disk('local')->put($name,\File::get($path));
    }
}
