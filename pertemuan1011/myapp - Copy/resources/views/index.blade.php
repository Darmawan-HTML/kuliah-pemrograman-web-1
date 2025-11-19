<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <nav class="sticky top-0 bg-gray-800 text-white shadow-lg z-10">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="/home" class="text-xl md:text-2xl font-black text-white">☕ Warkop '18 ARJUNK</a>
      <div class="space-x-3 md:space-x-6 text-sm md:text-base">
        <a href="/home" class="text-white hover:text-red-600 transition duration-300 font-medium border-b-2 border-red-600 pb-1">Beranda</a>
        <a href="/category" class="text-white hover:text-red-600 transition duration-300 font-medium">Daftar Menu</a>
        <a href="/galery" class="text-white hover:text-red-600 transition duration-300 font-medium">Galeri</a>
      </div>
    </div>
  </nav>

  <section class="py-16 md:py-32 bg-cover bg-center text-white min-h-screen flex items-center justify-center px-4 md:px-10"
    style="background-image: url('background.png'); background-color: rgba(0,0,0,0.6); background-blend-mode: darken;">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">Warkop '18 <span class="text-red-400">ARJUNK</span></h1>
      <p class="text-lg md:text-2xl font-light mb-6 mx-2 md:mx-auto drop-shadow-md">
        Tempat ngopi yang hangat dan suasana akrab
      </p>
      <p class="text-base md:text-lg mb-10 max-w-3xl mx-auto leading-relaxed bg-black bg-opacity-40 p-4 rounded-lg shadow-xl">
        Ngopi di sini bukan sekadar isi cangkir, tapi isi hati — tempat ketemu teman, berbagi cerita, dan ngisi energi buat lanjut hidup.
      </p>
      <a href="/category" class="bg-red-600 text-white font-bold py-3 px-6 md:px-8 rounded-full text-base md:text-lg hover:bg-red-700 transition duration-300 shadow-xl transform hover:scale-105">
        Cek Daftar Menu
      </a>
    </div>
  </section>

  <footer class="bg-gray-800 text-white py-6 text-center text-sm md:text-base">
    <p>&copy; 2025 Warkop '18 ARJUNK. Kopi Bikin Asik.</p>
    <p class="mt-1">Info & Order: 089xxxxxxxxx | Ar.dg.ngunjung nomor 18</p>
  </footer>

</body>
</html>