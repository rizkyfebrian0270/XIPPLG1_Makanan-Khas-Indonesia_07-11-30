<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $primaryKey = 'id_makanan';

    public function reviews()
{
        return $this->hasMany(Review::class, 'food_id', 'id_makanan');
}
    

    // Kolom yang boleh di-mass assign
    protected $fillable = [
        'name',
        'image',
        'content',
    ];

}
