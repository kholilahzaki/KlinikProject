<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;
    protected $fillable = ['bpjs_no', 'bpjs_jenis'];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}

