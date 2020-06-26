<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheep extends Model
{
    protected $guarded = [];

    public function sheepfold()
    {
        return $this->belongsTo('App\Sheepfold');
    }
}
