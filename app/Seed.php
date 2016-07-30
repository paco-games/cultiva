<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Seed extends Model
{
    //
    
    protected $table = "seeds";

    protected $dates = ['deleted_at'];

    protected $fillable = ['id','id_general','description','price','gestation','harvest','numseeds','efficiency','period','typeground','weatherType','pathperfil'];
    

}
