# Praktikum 5

Berikut analisis dari praktikum 5 berjudul `Dasar Java Script`

## 1. Javascript pada file HTML [`1tagScript.html`](1tagScript.html)
Output: 

![gambar1tagScript.png](ImageOutput/gambar1tagScript.png)

Analisis:
- di tag script, ada attribute `language="javascript"` yaitu menandakan bahwa script nya memakai bahasa pemrograman javascript
- Di dalam tag head, ada tag script yang digunakan untuk menampilkan teks "Program JavaScript Aku di kepala" `document.write("Program JavaScript Aku di kepala")`
- Di dalam tag body, ada tag script yang digunakan untuk menampilkan teks "Program JavaScript Aku di body" `document.write("Program JavaScript Aku di body ")`

## 2. Event Tertentu [`2eventTertentu.html`](2eventTertentu.html)
Output:
- Gambar 1
  ![gambar2eventTertentu_1.png](ImageOutput/gambar2eventTertentu_1.png)
- Gambar 2
  
  ![gambar2eventTertentu_2.png](ImageOutput/gambar2eventTertentu_2.png)

Analisis :
- `<button onclick="tampilkan_nama()">klik disini</button>`
  - onclick adalah event yang akan dijalankan ketika tombol diklik
  - tampilkan_nama() adalah function yang akan dijalankan ketika tombol diklik
- `<div id="hasil"></div>`
  - id="hasil" adalah id dari div yang akan menampilkan nama
- `function tampilkan_nama(){
				document.getElementById("hasil").innerHTML = 
				"<h3>Nama Saya Adalah Shaquille Rashaun Sahl Tamrin</h3>"
			}`
	- ketika button onclick dijalankan (gambar1), maka function tampilkan_nama() akan dijalankan, `document.getElementById("hasil")` akan mengambil element div dengan id="hasil" setelah itu `.innerHTML` menambahkan `<h3>Nama Saya Adalah Shaquille Rashaun Sahl Tamrin</h3>` (gambar2)

## 3. Contoh Sederhana [`3contohSederhana.html`](3contohSederhana.html)
Output:

![gambar3contohSederhana.png](ImageOutput/gambar3contohSederhana.png)

Analisis:
- `document.write("Selamat Belajar Angkatan 2024", "<br>")` document.write digunakan untuk menampilkan teks di dalam tag body. Disini menampilkan teks lalu break line
- `document.write("JavaScript Pemrograman WEB Teknik komputer")` Menampilkan teks "JavaScript Pemrograman WEB Teknik komputer"

## 4. Memasukkan Data [`4memasukkanData.html`](4memasukkanData.html)
Output:
- Gambar 1
  ![gambar4memasukkanData_1.png](ImageOutput/gambar4memasukkanData_1.png)
- Gambar 2
  ![gambar4memasukkanData_2.png](ImageOutput/gambar4memasukkanData_2.png)

Analisis:
- `var nama = prompt("Siapa nama Anda?")` prompt digunakan untuk memasukkan data dari user. Disini user diminta untuk memasukkan nama
- `document.write("Hai, " + nama )` document.write digunakan untuk menampilkan teks di dalam tag body. Disini menampilkan teks "Hai, " + nama (nama yang dimasukkan user)