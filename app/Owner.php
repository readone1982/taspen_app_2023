<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    protected $table = 'owner';

    public function unit()
    {
        return $this->hasMany('App\Unit', 'owner_id', 'id');
    }
}
