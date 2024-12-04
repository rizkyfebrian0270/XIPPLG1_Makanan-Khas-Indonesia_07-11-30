<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makanan Khas Indonesia</title>
  <link rel="stylesheet" href="{{asset('assets/styles/style.css')}}" />
  @vite('resources/css/app.css')
  <style>
    /* Tambahkan padding-top sebesar tinggi navbar */
    body {
      padding-top: 300px; /* Sesuaikan dengan tinggi navbar Anda */
    }
  </style>
</head>
<body>
    
  <header>
    <a href="#" class="logo"><img src="{{asset('assets/images/Logo.png')}}"></a>
    <nav>
        <a href="#home" class="active">Home</a>
        <a href="#popular">Popular Foods</a>
        <a href="#about">About Us</a>
        <a href="#indonesianfoods">Indonesian Foods</a>
        <a href="#contact">Contact</a>
    </nav>
  </header>

<div class="container mx-auto py-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold">{{ $food->name }}</h1>
        
        <div class="mt-4">
            <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="w-full h-64 object-cover rounded-lg">
        </div>
        
        <p class="mt-4 text-gray-700">{{ $food->content }}</p>

        <div class="mt-8">
            <h3 class="text-2xl font-semibold">Reviews</h3>
            @if($reviews->isEmpty())
                <p class="text-gray-500">No reviews yet.</p>
            @else
                <div class="mt-4 space-y-4">
                    @foreach($reviews as $review)
                        <div class="border-b pb-4">
                            <p class="font-semibold">{{ $review->user->name }} - Rating: {{ $review->rating }} Stars</p>
                            <p class="text-gray-600">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold">Leave a Review</h3>
            <form action="{{ route('reviews.store', $food->id_makanan) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="rating" class="block text-gray-700">Rating</label>
                    <select name="rating" id="rating" class="w-full p-2 border rounded">
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="comment" class="block text-gray-700">Comment</label>
                    <textarea name="comment" id="comment" class="w-full p-2 border rounded" rows="4"></textarea>
                </div>
                <input type="hidden" name="food_id" value="{{ $food->id_makanan }}"> <!-- Menambahkan input tersembunyi untuk food_id -->
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Submit Review</button>
            </form>
            
        </div>
    </div>
</div>
<section id="contact" class="contact">
    <!-- Bagian contact section tetap sama -->
    <div class="credit"></div>
      <div class="rectangle-5"></div>
      <img class="logo-2" src="{{asset('assets/images/Logo.png')}}" />
      <h1 class="nama-4">INDONESIAN FOOD</h1>
      <p class="par-3">
        Indonesia Food U adalah platform daring yang menyediakan deskripsi berbagai makanan khas Indonesia dari
        berbagai daerah. Situs ini berfokus pada makanan populer yang menjadi ciri khas Nusantara, memberikan
        informasi singkat mengenai setiap makanan, termasuk asal usul dan keunikan cita rasanya. Pengunjung dapat
        menjelajahi ragam kuliner Indonesia dan mengenal lebih dalam karakteristik makanan-makanan favorit dari
        seluruh penjuru negeri. "Indonesia Food U" menjadi panduan ringkas bagi siapa pun yang ingin
        memahami kekayaan kuliner Indonesia tanpa perlu menjelajahi semua tempatnya.
      </p>
      <h3 class="text-1">FAQS</h3>
      <h3 class="text-2">About</h3>
      <h3 class="text-3">Privacy Policy</h3>
      <h3 class="text-4">Terms & Conditions</h3>
      <h3 class="text-5">Support</h3>
      <h3 class="text-6">SMK TELKOM PURWOKERTO, BANYUMAS, JAWA TENGAH, INDONESIA</h3>
      <h3 class="text-7">+62-882-3980-5684</h3>
      <h3 class="text-8">indonesianfood@gmail.com</h3>
    </div>
  </section>

  <script src="assets/js/script.js"></script>
</body>
</html>