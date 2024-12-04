<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makanan Khas Indonesia</title>
  <link rel="stylesheet" href="assets/styles/style.css" />
  @vite('resources/css/app.css')
  <style>
    /* Tambahkan padding-top sebesar tinggi navbar */
    body {
      padding-top: 80px; /* Sesuaikan dengan tinggi navbar Anda */
    }
  </style>
</head>
<body>
    
  <header>
    <a href="#" class="logo"><img src="assets/images/Logo.png"></a>
    <nav>
        <a href="#home" class="active">Home</a>
        <a href="#popular">Popular Foods</a>
        <a href="#about">About Us</a>
        <a href="#indonesianfoods">Indonesian Foods</a>
        <a href="#contact">Contact</a>
    </nav>
  </header>
  
  <section id="about" class="hidden">
        <img class="ellipse-4" src="assets/images/Ellipse 2.png" />
        <div class="ellipse-5"></div>
        <img class="image-6" src="assets/images/Gado-gado.png" />
        <h1 class="about-us-3">About Us</h1>
        <p class="about-us-4">
            Selamat datang di Indonesia Food, destinasi kuliner yang menghadirkan cita rasa autentik Indonesia. Kami
            berdedikasi untuk melestarikan dan memperkenalkan kekayaan kuliner nusantara dengan menggunakan resep
            tradisional yang telah diwariskan dari generasi ke generasi. <br /><br />Setiap hidangan yang kami
            sajikan diolah dengan bahan-bahan pilihan, mencerminkan keanekaragaman budaya dan rasa yang ada di
            seluruh penjuru Indonesia. Mari nikmati perjalanan kuliner bersama kami dan rasakan kelezatan sejati
            dari warisan kuliner Indonesia!
        </p>
  </section>

  <!-- Menambahkan my-16 untuk margin vertikal dan mx-auto untuk mengatur ke tengah -->
  <div class="container mx-auto px-4 my-16">
    <h1 class="text-4xl font-bold text-center mb-12">Welcome to Indonesian Food</h1>
    
    <!-- Menambahkan justify-center untuk memusatkan card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-center">
        @foreach($foods as $food)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs mx-auto">
                <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $food->name }}</h2>
                    <p class="text-gray-500 mb-4">{{ Str::limit($food->content, 100) }}</p>
                    <a href="{{ route('foods.show', $food->id_makanan) }}" class="text-blue-500 hover:underline inline-block">See Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

  <section id="contact" class="contact">
    <!-- Bagian contact section tetap sama -->
    <div class="credit"></div>
      <div class="rectangle-5"></div>
      <img class="logo-2" src="assets/images/Logo.png" />
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