<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    protected $table = 'ticket';

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public function list()
    {
        return $this->hasMany('App\TicketList');
    }
}
