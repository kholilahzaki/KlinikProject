<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kia extends Model
{
    use HasFactory;

    public function kk(){
        return $this->hasMany(Kk::class);
    }
}
