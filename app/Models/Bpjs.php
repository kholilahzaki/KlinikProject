<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;
    protected $fillable = ['no_bpjs', 'bpjs_jenis'];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}

