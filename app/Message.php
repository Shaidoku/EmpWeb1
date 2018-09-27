<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded =[];
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function owner2()
    {
        return $this->hasMany(Chats::class, 'chat_id');
    }
}
