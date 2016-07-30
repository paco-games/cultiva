<?php

namespace cultiva;

use Illuminate\Database\Eloquent\Model;

class activeFarm extends Model
{
    //
    protected $table = "active_farms";

    protected $dates = ['deleted_at','dateEnd','dateInit'];

    protected $fillable = ['dateInit','dateEnd','estimatedProduction','realProduction','seed_id','status'];
}
