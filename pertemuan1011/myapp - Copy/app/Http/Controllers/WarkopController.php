<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarkopController extends Controller
{
    // 1. Halaman Beranda
    public function index()
    {
        return view('index', [
            'title' => "Warkop '18 ARJUNK - Beranda"
        ]);
    }

    // 2. Halaman Daftar Menu (Category)
    public function category()
    {
        // Kita simpan data menu dalam Array multidimensi
        // Kita juga simpan class warna (gray, blue, red) agar tampilan tetap sama
        $daftar_menu = [
            [
                'kategori' => 'KOPI KLASIK ☕',
                'warna_border' => 'border-gray-600', // Warna border atas
                'warna_text' => 'text-gray-900',     // Warna judul
                'items' => [
                    ['nama' => 'Kopi Hitam', 'harga' => 'Rp 12.000'],
                    ['nama' => 'Kopi Susu', 'harga' => 'Rp 12.000'],
                    ['nama' => 'Kopi Gula Aren', 'harga' => 'Rp 13.000'],
                    ['nama' => 'Cappucino / Latte', 'harga' => 'Rp 10.000 - 12.000'],
                ]
            ],
            [
                'kategori' => 'NON-KOPI & TEH 🥤',
                'warna_border' => 'border-blue-600',
                'warna_text' => 'text-blue-700',
                'items' => [
                    ['nama' => 'Teh Manis', 'harga' => 'Rp 5.000–8.000'],
                    ['nama' => 'Choco Malt / Hazelnut', 'harga' => 'Rp 10.000–12.000'],
                    ['nama' => 'Greentea / Taro', 'harga' => 'Rp 10.000–12.000'],
                ]
            ],
            [
                'kategori' => 'MAKANAN & SNACK 🍜',
                'warna_border' => 'border-red-700',
                'warna_text' => 'text-red-700',
                'items' => [
                    ['nama' => 'Mie Instan', 'harga' => 'Rp 8.000'],
                    ['nama' => 'Mie Doble', 'harga' => 'Rp 13.000'],
                    ['nama' => 'Mie + Telur', 'harga' => 'Rp 15.000'],
                    ['nama' => 'Kentang Goreng', 'harga' => 'Rp 15.000'],
                ]
            ]
        ];

        return view('category', [
            'title' => "Warkop '18 ARJUNK - Menu & Harga",
            'menus' => $daftar_menu
        ]);
    }

    // 3. Halaman Galeri
    public function galery()
    {
        // Data Foto sesuai file Anda
        $koleksi_foto = [
            ['file' => 'Menu.jpeg', 'caption' => 'Menu-menu yang ada'],
            ['file' => 'TampilanDepan.jpeg', 'caption' => 'Foto tampilan depan'],
            ['file' => 'bagiandalam.jpeg', 'caption' => 'Bagian dalam Warkop'],
            ['file' => 'orang.png', 'caption' => 'Foto Owner'],
        ];

        return view('galery', [
            'title' => "Warkop '18 ARJUNK - Galeri Foto",
            'photos' => $koleksi_foto
        ]);
    }
}