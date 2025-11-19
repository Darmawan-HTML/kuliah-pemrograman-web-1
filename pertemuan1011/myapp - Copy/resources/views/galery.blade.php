<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <nav class="sticky top-0 bg-gray-800 shadow-lg z-10">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="/home" class="text-xl md:text-2xl font-black text-white">☕ Warkop '18 ARJUNK</a>
      <div class="space-x-3 md:space-x-6 text-sm md:text-base">
        <a href="/home" class="text-white hover:text-red-600 transition duration-300 font-medium">Beranda</a>
        <a href="/category" class="text-white hover:text-red-600 transition duration-300 font-medium">Daftar Menu</a>
        <a href="/galery" class="text-white hover:text-red-600 transition duration-300 font-medium border-b-2 border-red-600 pb-1">Galeri</a>
      </div>
    </div>
  </nav>

  <section class="py-16 md:py-24 bg-cover bg-center min-h-screen text-white px-4"
    style="background-image: url('background.png'); background-color: rgba(0,0,0,0.6); background-blend-mode: darken;">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-10 border-b-4 border-red-600 inline-block pb-1">
        Galeri Momen Terbaik <span class="text-red-300">Warkop '18 ARJUNK</span>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-2">
        
        {{-- Looping Foto dari Controller --}}
        @foreach($photos as $foto)
        <div class="group overflow-hidden rounded-lg shadow-xl">
          {{-- Pastikan nama file gambar (Menu.jpeg, dll) ada di folder public --}}
          <img class="w-full h-48 object-cover transform transition duration-500 group-hover:scale-110" 
               src="{{ $foto['file'] }}" 
               alt="{{ $foto['caption'] }}">
          <div class="p-2 text-center bg-white/90 text-sm text-gray-800">
            {{ $foto['caption'] }}
          </div>
        </div>
        @endforeach

      </div>

      <p class="text-center mt-10 text-white italic text-sm bg-black/50 p-2 rounded">
        Lihat lebih banyak foto di Instagram/Facebook kami.
      </p>
    </div>
  </section>

  <footer class="bg-gray-800 text-white py-6 text-center text-sm md:text-base">
    <p>&copy; 2025 Warkop '18 ARJUNK. Kopi Bikin Asik.</p>
    <p class="mt-1">Info & Order: 089xxxxxxxxx | Ar.dg.ngunjung nomor 18</p>
  </footer>

</body>
</html>