# Praktikum 4

Tugas praktikum ini adalah membuat galeri dan dropdown menu di navbar. Akan ada di file `praktikum4.html` dan `praktikum4style.css`

## Struktur File

```bash
📦Praktikum_4
 ┣ 📂css
 ┃ ┣ 📜praktikum4style.css
 ┃ ┗ 📜style.css
 ┣ 📂image
 ┃ ┣ 📂praktikum3Image
 ┃ ┃ ┣ 📜certi.png
 ┃ ┃ ┣ 📜profile.jpg
 ┃ ┃ ┣ 📜programmingIcons2.jpg
 ┃ ┃ ┗ 📜project.png
 ┃ ┗ 📂praktikum4Image
 ┃ ┃ ┣ 📜bronya.jpeg
 ┃ ┃ ┣ 📜Castorice.jpeg
 ┃ ┃ ┣ 📜chibiherta.jpeg
 ┃ ┃ ┣ 📜columbina.jpeg
 ┃ ┃ ┣ 📜columbina2.jpeg
 ┃ ┃ ┣ 📜download.jpeg
 ┃ ┃ ┣ 📜Elaina.jpeg
 ┃ ┃ ┣ 📜ely.jpeg
 ┃ ┃ ┣ 📜elyexpy.jpeg
 ┃ ┃ ┣ 📜elysia.jpeg
 ┃ ┃ ┣ 📜furina.jpeg
 ┃ ┃ ┣ 📜furina2.jpeg
 ┃ ┃ ┣ 📜Herta.jpeg
 ┃ ┃ ┣ 📜kafka.jpeg
 ┃ ┃ ┣ 📜kafka2.jpeg
 ┃ ┃ ┣ 📜kurumi.jpeg
 ┃ ┃ ┣ 📜lilit.jpeg
 ┃ ┃ ┣ 📜March7th.jpeg
 ┃ ┃ ┣ 📜miyabi.jpeg
 ┃ ┃ ┣ 📜vivian.jpeg
 ┃ ┃ ┗ 📜yumeko.jpeg
 ┣ 📜index.html
 ┣ 📜praktikum4.html
 ┗ 📜readme.md
```

## Struktur Umum HTML

File HTML ini terdiri dari layout 3 kolom serta navigasi dan dropdown pemilihan karakter waifu.

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/praktikum4style.css" />
        <title>Galeri</title>
    </head>
    <body>
        <div class="site-main">...</div>
        <div class="columns">...</div>
    </body>
</html>
```

### Elemen Header (`.site-main`)

Bagian ini berisi

-   Judul galeri `<h3>Galery</h3>`
-   Dropdown pemilihan waifu `<select>...</select>`
-   Navigasi sederhana `<nav>...</nav>`

```html
<div class="site-main">
    <h3>Galery</h3>
    <select id="waifu-select">
        <button>
            <selectedcontent></selectedcontent>
        </button>
        <option value="">Please choose a waifu</option>
        <option value="the-herta">
            <span class="icon" aria-hidden="true">😊</span>
            <span class="option-label">The Herta</span>
        </option>
        <option value="columbina">
            <span class="icon" aria-hidden="true">😚</span>
            <span class="option-label">Columbina</span>
        </option>
        ...
    </select>
    <nav>
        <ul>
            <li><a href="https://shaq.work" class="navRow">...</a></li>
            <li><a href="index.html" class="navRow">...</a></li>
        </ul>
    </nav>
</div>
```

### Layout Galeri Gambar (`.columns`)

```html
<div class="columns">
    <div class="column column-reverse">
        <figure class="column__item">
            <div class="column__item-imgwrap">
                <img src="image/praktikum4Image/kafka.jpeg" />
            </div>
        </figure>
    </div>
    <div class="column">
        <figure class="column__item">
            <div class="column__item-imgwrap">
                <img src="image/praktikum4Image/ely.jpeg" />
            </div>
        </figure>
    </div>
    <div class="column column-reverse">
        <figure class="column__item">
            <div class="column__item-imgwrap">
                <img src="image/praktikum4Image/March7th.jpeg" />
            </div>
        </figure>
    </div>
</div>
```

-   `.columns` grid dengan 3 kolom `grid-template-columns: repeat(3, 1fr)`
-   `.column` setiap kolom berisi gambar
-   `.column-reverse` kolom dengan arah item dibalik (reverse scroll effect)

## Struktur CSS

### Import & root

```css
@import url("https://fonts.googleapis.com/...");
@import "https://unpkg.com/open-props" layer(design.system);

:root {
    interpolate-size: allow-keywords;
}
```

-   `@import` pertama memuat font JetBrains Mono. Kedua memuat paket utilitas CSS `open-props` berguna untuk token desain
-   `:root { interpolate-size: allow-keywords; }` Properti ini bersifat eksperimental; tujuannya mengizinkan keyword ketika interpolasi ukuran (konfigurasi eksperimental untuk rendering animasi).

### \* dan body

```css
* {
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
    height: 100%;
    overscroll-behavior: none;
    font-family: "JetBrains Mono";
}
```

-   `box-sizing: border-box` ukuran elemen termasuk padding/border.
-   `overscroll-behavior: none` mencegah efek "rubber band" / scroll chaining pada beberapa browser ketika menggulir.

### `.site-main` header sticky, layout, background

```css
.site-main {
    top: 0;
    position: sticky;
    z-index: 1;
    display: flex;
    justify-content: space-between;
    padding-left: 8em;
    padding-right: 8em;
    align-items: center;
    background-color: oklch(0.73 0.0584 251.06);
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
    /* ... diikuti nested lainnya (select, nav, ul, ...) */
}
```

-   `position: sticky; top: 0;` header menempel di atas saat scroll (tetap terlihat).
-   `background-color: oklch(0.73 0.0584 251.06)` format warna OKLCH.
-   Border bottom besar membulatkan bagian bawah header untuk estetika.

### Styling `select` dan `option`

#### Mengatur appearance

```css
select,
::picker(select) {
    appearance: base-select;
}
```

-   Hapus gaya default browser dengan `appearance`. `::picker(select)` adalah pseudo-element eksperimen yang menunjuk UI picker native.

#### Visual Dasar untuk `select`

```css
select {
    border: 2px solid #ddd;
    background: #eee;
    padding: 10px;
    transition: 0.4s;
}

select:hover,
select:focus {
    background: #ddd;
}
```

-   Border + background abu muda; transisi halus saat hover/focus.

#### Styling tiap `option`

```css
option {
    display: flex;
    justify-content: flex-start;
    gap: 20px;

    border: 2px solid #ddd;
    background: #eee;
    padding: 10px;
    transition: 0.4s;
}

option:first-of-type {
    border-radius: 8px 8px 0 0;
}

option:last-of-type {
    border-radius: 0 0 8px 8px;
}

option:not(option:last-of-type) {
    border-bottom: none;
}

option:nth-of-type(odd) {
    background: #fff;
}

option:hover,
option:focus {
    background: plum;
}
```

-   `display: flex` memungkinkan ada ikon + label dalam satu `option`
-   Zebra striping pada opsi ganjil
-   Hover menjadi `plum` untuk highlight
-   Pembulatan pada opsi pertama/terakhir agar menu terlihat membulat.

#### Ikon dan checkmark

```css
option .icon {
    font-size: 1.6rem;
    text-box: trim-both cap alphabetic;
}

option:checked {
    font-weight: bold;
}

option::checkmark {
    order: 1;
    margin-left: auto;
    content: "☑️";
}
```

-   Ikon lebih besar `1.6rem`
-   `text-box` dan `::checkmark` adalah fitur eksperimental: `text-box` mengontrol box teks/trim, dan `option::checkmark` mencoba menambahkan tanda centang di opsi yang terpilih.

#### Picker icon & popover transitions

```css
select::picker-icon {
    color: #999;
    transition: 0.4s rotate;
}
select:open::picker-icon {
    rotate: 180deg;
}

@starting-style {
    ::picker(select):popover-open {
        opacity: 0;
    }
}
::picker(select) {
    border: none;
    opacity: 0;
    transition: all 0.4s allow-discrete;
}
::picker(select):popover-open {
    opacity: 1;
}
selectedcontent .icon {
    display: none;
}
```

-   `::picker(select)` dan `::picker-icon` menarget UI native picker/panah; saat menu terbuka `:popover-open` / `:open diatur` opacity/transisi dan panah diputar 180° `rotate`.
-   `@starting-style` dan `allow-discrete` adalah bagian dari proposal transisi / animation spec.
-   `selectedcontent .icon` menyembunyikan ikon dalam area yang menampilkan pilihan yang sudah dipilih.

### Navigasi `nav ul`, `.navRow`, `.text`

```css
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;

    border: none;
    padding: 0.5rem 0;
    overflow-x: visible;

    display: flex;
    flex-direction: row;
    gap: 0.5rem;

    width: 4.5rem;
    padding: 1rem;

    .navRow {
        display: grid;
        grid-template-columns: 1.5rem auto;
        gap: 1rem;
        padding: 0.5rem;
        font-size: 1rem;
        transition-duration: 0.25s;
        align-items: center;
        background: #eaeaea;
        border-radius: 0.5rem;
        color: #5f6368;
        text-decoration: none;

        white-space: nowrap;
        width: 2.5rem;
        overflow-x: hidden;
        transition: width 0.35s ease;

        &:hover {
            background: lightgray;
            color: #333;
            /* width: 7rem; */
            width: max-content;
        }
    }

    .text {
        padding-right: 0.75rem;
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
    }
}
```

-   menu kecil (ikon) yang ketika hover melebar untuk menampilkan teks label.
-   `grid-template-columns: 1.5rem auto` membuat kolom ikon + teks.
-   `width: 2.5rem` default (hanya ikon terlihat), `width: max-content` saat hover membuat elemen melebar sesuai isi.

### Layout galeri `.columns` & `.column`

```css
.columns {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    width: 100%;
    max-width: 80em;
    margin: 0 auto;
    position: relative;
}

.column {
    --column-offset: 10vh;
    display: flex;
    flex-direction: column;
    padding: var(--column-offset) 0;
}
```

-   Grid 3 kolom, tengah diberi batas lebar `max-width`.
-   Setiap `.column` pakai `flex` untuk susun gambar vertikal. `--column-offset` jadi jarak vertikal di atas/bawah tiap kolom.

#### Gambar

```css
.column__item-imgwrap img {
    border-radius: 1em;
    width: 100%;
    height: auto;
    aspect-ratio: 0.75;
    object-fit: cover;
}
```

-   `aspect-ratio: 0.75` memaksa rasio tinggi/width sehingga layout konsisten.
-   `object-fit: cover` memotong gambar agar memenuhi kotak tanpa deformasi.

### Scroll-linked animation `@supports (animation-timeline: scroll())`

```css
@supports (animation-timeline: scroll()) {
    .columns {
        overflow-y: hidden;
    }
    .column-reverse {
        flex-direction: column-reverse;
    }

    @keyframes adjust-position {
        from {
            transform: translateY(calc(-100% + 100vh));
        }
        to {
            transform: translateY(calc(100% - 100vh));
        }
    }

    .column-reverse {
        animation: adjust-position linear forwards;
        animation-timeline: scroll(root block);
    }
}
```
- `@supports(...)` memeriksa apakah browser mendukung Scroll-linked Animations (`animation-timeline`)
- `.columns { overflow-y: hidden; }` menghindari overflow karena kita memindahkan kolom dengan transform.
- `.column-reverse { flex-direction: column-reverse; }` membalik urutan elemen dalam kolom (gambar akan muncul terbalik).
- `@keyframes adjust-position` mendefinisikan animasi translateY dari `-100% + 100vh` ke `100% - 100vh`. Intinya: saat halaman discroll, kolom bergeser vertikal sehingga efeknya adalah kolom tampak bergerak ke arah berlawanan (reverse).
- `animation-timeline: scroll(root block)` mengikat progres animasi ke posisi scroll root viewport (scroll timeline).