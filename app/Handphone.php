<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    // Setiap handphone hanya dimiliki oleh 1 user
    public function user(){
        return $this->belongsTo("App\User");
    }
}
