<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penarikan_lc extends Model
{
    use HasFactory;
    protected $fillable = ['p_tglPenarikan', 'p__alasanPenarikan'];
}
