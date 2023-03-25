<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    protected $table = 'units';

    public function tower()
    {
        return $this->belongsTo('App\Tower');
    }

    public function floor()
    {
        return $this->belongsTo('App\Floor');
    }

    public function wing_code()
    {
        return $this->belongsTo('App\WingCode');
    }

    public function unit_number()
    {
        return $this->belongsTo('App\UnitNumber');
    }

    public function unit_type()
    {
        return $this->belongsTo('App\UnitType');
    }

    public function unit_size()
    {
        return $this->belongsTo('App\UnitSize');
    }

    public function voltage_size()
    {
        return $this->belongsTo('App\VoltageSize');
    }

    public function resident()
    {
        return $this->belongsTo('App\Resident');
    }

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public function status_unit()
    {
        return $this->belongsTo('App\StatusUnit');
    }

    public function user_type()
    {
        return $this->belongsTo('App\UserType');
    }

    public function access_card()
    {
        return $this->hasMany('App\UnitAccessCard');
    }

    public function secure_parkir()
    {
        return $this->hasMany('App\UnitSecureParkir');
    }

}
