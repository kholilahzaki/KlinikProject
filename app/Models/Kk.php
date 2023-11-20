<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $fillable = ['kk_no', 'kk_no_dokumen', 'kk_kepalakeluarga', 'kk_pasangan', 'kk_anak', 'kk_fotokk'];
    
    public function member(){
        return $this->belongsTo(Member::class);
    }
}
