<?php

namespace App\Http\Controllers;
Use App\Models\Review;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Food $food)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

        // Menyimpan review
        Review::create([
            'food_id' => $food->id_makanan,  // Pastikan food_id cocok dengan kolom di tabel 'reviews'
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        // Kembali ke halaman detail makanan
        return back()->with('success', 'Review submitted successfully!');
    }


}
