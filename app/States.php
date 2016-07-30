<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = "states";
    protected $dates = ['deleted_at'];
    protected $fillable = ['namestate'];

    //Relación Usuarios - Estado. 1-N.
    public function users()
    {
    	return $this->HasMany('cultiva\User');
    }
    
    //Relación Municipios - Estado. 1-N.
    public function municipalities()
    {
        return $this->belongsTo('cultiva\Municipality');
    }
}
