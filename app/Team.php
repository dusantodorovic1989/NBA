<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $guarded = ['id'];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
