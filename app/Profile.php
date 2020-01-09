<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        //laravel will fetch data from User table and create the relationship
        return $this->belongsTo(User::class);
    }
}
