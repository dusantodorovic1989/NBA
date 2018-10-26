<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    public function players(){
        return $this->hasMany(Player::class);
    }
}
