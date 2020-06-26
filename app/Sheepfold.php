<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheepfold extends Model
{
    protected $guarded = [];

    public function sheeps()
    {
        return $this->hasMany('App\Sheep');
    }
}
