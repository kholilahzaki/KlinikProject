<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lc extends Model
{
    use HasFactory;
    protected $fillable = ['lc_no', 'lc_jenis', 'lc_tgldibuat', 'lc_sumberdata', 'lc_formlc', 'lc_isActive', 'lc_alasan'];
  
    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function kk(){
        return $this->belongsTo(Kk::class);
    }

}
