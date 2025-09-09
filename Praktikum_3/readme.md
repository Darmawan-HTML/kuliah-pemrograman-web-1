# Portofolio

Tugas praktikum ini adalah membuat portofolio menggunakan HTML dan CSS. Praktikum ini adalah implementasi dari teknik "scrollytelling" dengan nama fitur Scroll-Driven Animations dari CSS yaitu animasi yang dipicu oleh scroll pengguna.

## Struktur File

```bash
📦Praktikum_3
 ┣ 📂css
 ┃ ┣ scroll.css
 ┃ ┗ style.css
 ┣ 📂image
 ┃ ┣ certi.png
 ┃ ┣ profile.jpg
 ┃ ┣ programmingIcons2.jpg
 ┃ ┗ project.png
 ┣ index.html
 ┣ readme.md
 ┗ scroll.html
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

CSS Layer adalah fitur CSS yang memungkinkan kita untuk mengelompokkan deklarasi CSS berdasarkan urutan prioritas.

```css
@layer support, demo;
@import "https://unpkg.com/open-props" layer(support.design-system);
```

### Animasi Fade

Animasi utama yang digunakan adalah fade dengan transformasi 3D.

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

Animasi ini mengubah opacity dan melakukan rotasi 3D pada elemen, menciptakan efek perpindahan halus.

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

Kode ini:

-   Membuat timeline untuk setiap section `view-timeline`
-   Mendefinisikan lingkup timeline di body `timeline-scope`
-   Menghubungkan setiap gambar `.face` dengan timeline yang tertentu `animation-timeline`
-   Membuat animasi `fade` pada setiap gambar

### Styling Layout

Layout utama menggunakan grid dengan dua kolom

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

Viewport gambar menggunakan `position: sticky` sehingga tetap terlihat saat scroll, sementara setiap gambar `.face` ditempatkan di area grid yang sama.

### Gradient Text

Text gradien yang digunakan pada portofolio menggunakan OKLAB dan OKLCH (mirip dengan RGB). OKLAB digunakan untuk mempersepsikan warna dengan mencoba membuat jarak antar warna lebih konsisten. OKLCH representasi silinder dari ruang warna OKLAB yang terdiri dari Lightness, Chroma, dan Hue

```css
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