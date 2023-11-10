<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LC extends Model
{
    use HasFactory;

    public function penarikan_lc() : HasOne{
        return $this->hasOne(Penarikan_lc::class);
    }
}
