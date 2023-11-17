<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $fillable = ['no_nik', 'ktp_nama', 'ktp_tglLahir', 'ktp_jeniskelamin', 'ktp_alamat', 'ktp_agama', 'ktp_statuskawin', 'ktp_pekerjaan', 'ktp_kewarganegaraan', 'ktp_fotoktp'];
}
