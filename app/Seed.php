<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    //
    
    protected $table = "seeds";

    protected $dates = ['deleted_at'];

    protected $fillable = ['description','user_id','timeProduction','image','estimatedEfficiency','period','groundType','weatherType'];


}
