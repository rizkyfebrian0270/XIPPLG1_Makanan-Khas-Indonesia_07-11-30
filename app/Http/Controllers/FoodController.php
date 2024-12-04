<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    // Menampilkan daftar makanan di Landing Page
    public function index()
{
    // Mengambil semua makanan
    $foods = Food::all();
    
    // Debugging: Menampilkan ID makanan

    // Mengembalikan tampilan dengan data makanan
    return view('foods.index', compact('foods'));
}

    // Menampilkan detail makanan dan review-nya
    public function show(Food $food)
{
    $reviews = $food->reviews()->with('user')->get();
    return view('foods.show', compact('food', 'reviews'));
}


}
