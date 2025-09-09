# Portofolio

Tugas praktikum ini adalah membuat portofolio menggunakan HTML dan CSS. Praktikum ini adalah implementasi dari teknik "scrollytelling" dengan nama fitur Scroll-Driven Animations dari CSS yaitu animasi yang dipicu oleh scroll pengguna.

## Struktur File

```bash
📦Praktikum_3
 ┣ 📂css
 ┃ ┗ style.css
 ┣ 📂image
 ┃ ┣ certi.png
 ┃ ┣ profile.jpg
 ┃ ┣ programmingIcons2.jpg
 ┃ ┗ project.png
 ┣ index.html
 ┗ readme.md
```

## Analisis HTML

### Struktur HTML

File HTML ini terdiri dari elemen header, main, dan section

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shaq Bio</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <!-- Navigasi -->
        </header>
        <main class="site-main">
            <div class="rotating-viewport">
                <!-- Gambar-gambar yang akan beranimasi -->
            </div>
            <!-- Section-section dengan konten -->
        </main>
    </body>
</html>
```

### Elemen Header

Header berisi logo dan link navigasi.

```html
<header>
    <div class="site-main">
        <div class="mock-logo">
            <h3>Portofolio</h3>
        </div>
        <nav>
            <a href="https://shaq.work">Doksli Portofolio</a>
        </nav>
    </div>
</header>
```

### Elemen Main

Main berisi konten utama dari halaman, termasuk rotasi gambar dan section-section dengan konten.

```html
<main class="site-main">
    <div class="rotating-viewport">
        <div class="face face-1">
            <img src="image/profile.jpg" alt="" />
        </div>
        <!-- Dan seterusnya -->
    </div>
    <section>
        <h1 class="hero-text">
            Meet<br />
            <div class="gradient-text-1">Shaquille Rashaun Sahl Tamrin</div>
        </h1>
    </section>
    <!-- Dan seterusnya -->
</main>
```

## Analisis CSS

### Layer CSS
```css
@layer support, demo;
@import "https://unpkg.com/open-props" layer(support.design-system);
```
- `@layer support, demo;` Mendeklarasikan layers CSS, membantu mengatur urutan spesifikasi CSS.
- `@import "https://unpkg.com/open-props" layer(support.design-system);` Mengimpor file CSS dari CDN Open Props, yang menyediakan seperti ukuran, warna, shadow, font-size, dll.

### Animasi `@keyframes fade`
```css
@keyframes fade {
    0% {
        opacity: 0;
        transform: perspective(1e3px) rotateY(90deg) rotateX(-5deg) rotate(
                10deg
            );
        -webkit-transform: perspective(1e3px) rotateY(90deg) rotateX(-5deg) rotate(
                10deg
            );
        -moz-transform: perspective(1e3px) rotateY(90deg) rotateX(-5deg) rotate(
                10deg
            );
        -ms-transform: perspective(1e3px) rotateY(90deg) rotateX(-5deg) rotate(
                10deg
            );
        -o-transform: perspective(1e3px) rotateY(90deg) rotateX(-5deg) rotate(
                10deg
            );
    }

    5% {
        opacity: 1;
    }

    70% {
        opacity: 1;
        transform: perspective(1e3px) rotateY(-30deg) rotateX(5deg) rotate(
                -1deg
            );
        -webkit-transform: perspective(1e3px) rotateY(-30deg) rotateX(5deg) rotate(
                -1deg
            );
        -moz-transform: perspective(1e3px) rotateY(-30deg) rotateX(5deg) rotate(
                -1deg
            );
        -ms-transform: perspective(1e3px) rotateY(-30deg) rotateX(5deg) rotate(
                -1deg
            );
        -o-transform: perspective(1e3px) rotateY(-30deg) rotateX(5deg) rotate(
                -1deg
            );
    }

    95% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        transform: perspective(1e3px) rotateY(-90deg) rotateX(10deg) rotate(
                10deg
            );
    }
}
```
- `perspective(1000px)` menambahkan kedalaman 3D.
- `rotate`Y & `rotateX` memberi efek rotate mendekati sumbu 3D.
- `opacity` + `transform` → kombinasi fade-in / fade-out + transform untuk transisi halus.
- Vendor prefixes (`-webkit-`, `-moz-`, dll.) dipakai untuk kompatibilitas.

### Scroll-Driven Animations

```css
@layer demo {
    main > section {
        &:nth-of-type(1) {
            view-timeline: --section-1 y;
        }

        &:nth-of-type(2) {
            view-timeline: --section-2 y;
        }

        &:nth-of-type(3) {
            view-timeline: --section-3 y;
        }

        &:nth-of-type(4) {
            view-timeline: --section-4 y;
        }

        &:nth-of-type(5) {
            view-timeline: --section-5 y;
        }
    }

    body {
        timeline-scope: --section-1, --section-2, --section-3, --section-4,
            --section-5;
    }

    .face {
        animation: fade ease both;
        animation-range: contain;
    }

    .face-1 {
        animation-name: fade;
        animation-timeline: --section-1;
    }

    .face-2 {
        animation-name: fade;
        animation-timeline: --section-2;
    }

    .face-3 {
        animation-name: fade;
        animation-timeline: --section-3;
    }

    .face-4 {
        animation-name: fade;
        animation-timeline: --section-4;
    }

    .face-5 {
        animation-name: fade;
        animation-timeline: --section-5;
    }
}
```
- `view-timeline: --section-1 y;` membuat view timeline untuk section tersebut. `y` menandakan sumbu vertikal (scroll-y).
- `timeline-scope` (pada `body`) mendefinisikan timeline yang dapat diakses oleh `animation-timeline`.
- `animation-timeline: --section-1;` mengikat `@keyframes` ke timeline yang dibuat dari `view-timeline`. Progres animasi dikontrol oleh posisi scroll terhadap section.
- `animation-range: contain;` membatasi pemutaran animasi sehingga animation hanya “berjalan” saat elemen terkait berada dalam range yang diharapkan. Ini mencegah animasi berjalan ketika section tidak terlihat.
- `animation: fade ease both;` nama animasi + timing function + fill-mode. Tidak ada `duration` eksplisit; saat menggunakan scroll-driven animation, implementasi browser menerjemahkan timeline ke progress animasi. Jika di beberapa browser animasi tidak berjalan, tambahkan animation-duration eksplisit untuk debugging.

### root variables
```css
:root {
    --main-column: 1024px;
}
* {
    box-sizing: border-box;
    margin: 0;
}
html {
    block-size: 100%;
    background: var(--gray-2);
}
body {
    min-block-size: 100%;
    font-family: system-ui, sans-serif;
}
```
- `box-sizing: border-box` mempermudah perhitungan layout (padding/border ikut menghitung ukuran elemen).
- `block-size` / `inline-size` adalah properti logical (menggantikan height/width).
- `--main-column` ditentukan untuk membatasi lebar konten utama; nilai lain (size token, shadow, dsb.) berasal dari Open Props.

### Header Styling
```css
header {
    display: flex;
    position: fixed;
    z-index: 1;
    inset: 0 0 auto 0;
    background: white;
    box-shadow: var(--shadow-1);
    block-size: var(--size-9);
    padding-inline: var(--size-7);

    > * {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav {
        display: flex;
        gap: var(--size-2);

        > a {
        color: CanvasText;
            text-decoration: none;
            display: inline-flex;
            place-items: center;
            padding-inline: var(--size-4);
            padding-block: var(--size-2);

            &.cta {
                background: oklch(70% 0.3 0);
                border-radius: var(--radius-round);
                color: white;
            }
        }
    }
}
```
- `position: fixed` + `inset: 0 0 auto 0;` header ditempelkan di atas: shorthand `inset: top right bottom left`.
- `> *` (child combinator) mengatur anak langsung header agar menjadi flex container.
- `inline-size` & `block-size` → ukuran secara logis (pengganti width/height).
- `.cta` pakai `oklch(...)` — warna di ruang warna OKLCH (modern, perceptually-uniform). Pastikan fallback warna untuk browser yang belum support.

### Layout Main

```css
main {
    display: grid;
    grid-auto-rows: 100svh;
    grid-template-columns: 2fr 1fr;
    gap: var(--size-7);
    place-items: center start;

    @media (width <=1080px) {
        padding-inline: var(--size-7);
    }

    > section {
        grid-column: 1 / 2;
        &:nth-of-type(1) {
            grid-row: 1;
        }
        margin-right: 100px;
    }
}
```
- `grid-auto-rows: 100svh` tiap baris grid setinggi 100svh (svh = small viewport height, unit modern untuk mengatasi UI bar di mobile). Hasil: setiap section akan memenuhi viewport tinggi (full-page sections).
- `grid-template-columns: 2fr 1fr` dua kolom: kiri lebih lebar (konten), kanan untuk rotating-viewport.
- `place-items: center start` *align-items: center & justify-items: start* (atau sebaliknya bergantung konteks).
- Media query (`width <=1080px`) ini adalah sintaks relational media queries yang lebih baru, sama saja dengan @media (max-width: 1080px).
- `margin-right: 100px;` memberikan ruang ekstra supaya teks tidak menempel ke area gambar.

### Gradient Text
```css
.hero-text {
    text-wrap: balance;
    max-inline-size: var(--size-header-1);
    font-size: var(--font-size-7);
    margin-inline: 0 auto;

    > div {
        display: inline;
    }
}

.gradient-text-1 {
    background: linear-gradient(
        to top right in oklab,
        oklch(55% 0.45 350),
        oklch(95% 0.4 95)
    )
    fixed;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.gradient-text-3 {
	background: linear-gradient(
    to bottom in oklch,
            oklch(75% 0.5 156),
            oklch(70% 0.5 261)
        )
        fixed;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.gradient-text-4 {
	background: linear-gradient(
    to top in oklab,
            oklch(60% 0.5 353),
            oklch(80% 0.5 271)
        )
        fixed;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.gradient-text-5 {
	background: linear-gradient(
    to bottom right in oklab,
            oklch(70% 0.5 350),
            oklch(70% 0.5 261)
        )
        fixed;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
```
- `text-wrap: balance;` upaya menyeimbangkan pembagian baris pada teks.
- Text gradien yang digunakan adalah OKLAB dan OKLCH (mirip dengan RGB). OKLAB digunakan untuk mempersepsikan warna dengan mencoba membuat jarak antar warna lebih konsisten. OKLCH representasi silinder dari ruang warna OKLAB yang terdiri dari Lightness, Chroma, dan Hue.

### Rotating Viewport
```css
.rotating-viewport {
    grid-column: 2;
    grid-row: 1;
    display: grid;
    position: sticky;
    top: 10svh;
    right: 0;
    height: 80svh;
    aspect-ratio: var(--ratio-portrait);

    & .face {
        grid-area: 1 / 1;
        backface-visibility: hidden;
        display: grid;
        align-items: center;

        > img {
            inline-size: 100%;
        }
    }
}
```
- `position: sticky; top: 10svh;` viewport akan “menempel” ketika pengguna scroll sampai titik tertentu (tetap terlihat).
- `grid-area: 1 / 1` pada `.face`, semua `.face` menumpuk di satu area (tumpukan gambar). Animasi mengganti visibility/opacitas tiap `.face`.
- `backface-visibility: hidden` mencegah tampilan “belakang” elemen saat diputar.
- `>img { inline-size: 100% }` memastikan gambar memenuhi lebar (atau inline-size 100%) dari kontainer.