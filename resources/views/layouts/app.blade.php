<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indonesian Food</title>
    @vite('resources/css/app.css')  <!-- Jika menggunakan Vite -->
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="font-semibold text-xl">Indonesian Food</a>
            <div>
                <a href="/" class="mr-6">Home</a>
                <a href="#" class="mr-6">About</a>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="bg-blue-600 text-white py-4 text-center">
        &copy; 2024 Indonesian Food. All Rights Reserved.
    </footer>
</body>
</html>
