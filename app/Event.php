<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded =[];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
