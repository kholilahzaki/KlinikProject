<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kia extends Model
{
    use HasFactory;
    protected $fillable = ['kia_tempatlahir', 'kia_tglLahir', 'kia_jeniskelamin', 'kia_alamat', 'kia_agama', 'kia_kewarganegaraan', 'no_akta_lahir', 'kia_fotoktp'];

    public function kk(){
        return $this->hasMany(Kk::class);
    }
}
