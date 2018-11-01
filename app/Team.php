<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $guarded = ['id'];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
