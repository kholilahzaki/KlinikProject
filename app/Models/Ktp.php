<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $fillable = ['ktp_tempatlahir', 'ktp_tglLahir', 'ktp_jeniskelamin', 'ktp_alamat', 'ktp_agama', 'ktp_statuskawin', 'ktp_pekerjaan', 'ktp_kewarganegaraan', 'ktp_fotoktp'];

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function kk(){
        return $this->hasMany(Kk::class);
    }
}
