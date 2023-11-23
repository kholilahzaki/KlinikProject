<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['mem_disabilitas', 'mem_lokasitps', 'mem_status', 'mem_koordinator'];

    public function bpjs(){
        return $this->hasOne(Bpjs::class);
    }

    public function kk(){
        return $this->hasMany(Kk::class);
    }

    public function ktp(){
        return $this->hasOne(Ktp::class);
    }

    public function lc(){
        return $this->hasOne(Lc::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
