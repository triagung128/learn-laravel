<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // One-to-One
    public function handphone(){
        return $this->hasOne("App\Handphone");
    }

    // One-to-Many -> Syarat foreign key tidak bersifat unik
    public function handphones(){
        return $this->hasMany("App\Handphone");
    }
}
