<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    protected $table = "grounds";
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','size','status','description','location','irrigation_system','user_id','culture_id'];
     
}
