<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $fillable = ['kk_nik', 'kk_status', 'kk_nama', 'kk_no', 'kk_no_dokumen', 'kk_fotokk'];
    protected $primaryKey = 'kk_no';
    
    public $incrementing = false;

    protected $keyType = 'string';
    
    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function ktp(){
        return $this->belongsTo(Ktp::class);
    }

    public function lc(){
        return $this->hasMany(Lc::class);
    }
}
