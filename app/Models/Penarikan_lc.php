<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penarikan_lc extends Model
{
    use HasFactory;
    protected $fillable = ['no_lc', 'lc_jenis', 'lc_tglInput', 'lc_tglUpdate'];
}
