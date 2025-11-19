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
        <a href="/category" class="text-white hover:text-red-600 transition duration-300 font-medium border-b-2 border-red-600 pb-1">Daftar Menu</a>
        <a href="/galery" class="text-white hover:text-red-600 transition duration-300 font-medium">Galeri</a>
      </div>
    </div>
  </nav>

  <section class="py-16 md:py-24 bg-cover bg-center min-h-screen text-white px-4"
    style="background-image: url('background.png'); background-color: rgba(0,0,0,0.6); background-blend-mode: darken;">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-12 border-b-4 border-red-600 inline-block pb-1">
        Daftar Menu <span class="text-red-300">Warkop '18 ARJUNK</span>
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        
        {{-- Looping Kategori Utama --}}
        @foreach($menus as $menu)
        <div class="bg-white/90 p-6 rounded-xl shadow-2xl border-t-4 {{ $menu['warna_border'] }} hover:scale-[1.02] transition duration-500">
          <h3 class="text-2xl font-bold mb-4 border-b pb-2 {{ $menu['warna_text'] }}">{{ $menu['kategori'] }}</h3>
          
          <div class="space-y-2 text-gray-800 text-sm md:text-base">
            {{-- Looping Item Makanan/Minuman --}}
            @foreach($menu['items'] as $item)
            <div class="flex justify-between border-b pb-2">
                <p>{{ $item['nama'] }}</p>
                <span>{{ $item['harga'] }}</span>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <footer class="bg-gray-800 text-white py-6 text-center text-sm md:text-base">
    <p>&copy; 2025 Warkop '18 ARJUNK. Kopi Bikin Asik.</p>
    <p class="mt-1">Info & Order: 089xxxxxxxxx | Ar.dg.ngunjung nomor 18</p>
  </footer>

</body>
</html>