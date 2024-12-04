<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function food()
{
    return $this->belongsTo(Food::class, 'food_id'); // food_id adalah foreign key di tabel reviews
}

protected $fillable = [
    'food_id',   // Tambahkan food_id
    'user_id',
    'rating',
    'comment',
];

// Menambahkan relasi ke User
public function user()
{
    return $this->belongsTo(User::class);  // Relasi belongsTo ke User
}
}
