<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    public function Login(): BelongsTo
    {
        return $this->belongsTo(Login::class);
    }
}
