<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    public function establecimiento(){

        return $this->belongsTo(Establecimiento::class);
    }
}
