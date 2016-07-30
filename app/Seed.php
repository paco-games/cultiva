<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    //
    
    protected $table = "seeds";

    protected $dates = ['deleted_at'];

    protected $fillable = ['id','id_general','description','price','gestation','harvest','numseeds','efficiency','period','typeground','weatherType','path'];

    //SetAttributte se usa para cuando se guarda una imagen y no se sobreescriba esa imagen
    public function setPathAttribute($path){
        
        if(!empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['path'] = $name;
        \Storage::disk('perfil')->put($name, \File::get($path));
        }
    }
}
