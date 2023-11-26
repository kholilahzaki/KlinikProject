<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    public function event(){
        return $this->hasOne(Event::class);
    }

    public function member(){
        return $this->hasMany(Member::class);
    }
}
