<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
    protected $table = "municipalities";
    protected $dates = ['deleted_at'];
    protected $fillable = ['state_id','namemunicipality'];

    public function state()
    {
    	return $this->belongsTo('cultiva\State','state_id');
    }
}
