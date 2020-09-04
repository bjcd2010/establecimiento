<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
}
