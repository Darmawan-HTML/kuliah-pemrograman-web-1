<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        // 1. Membuat Data Dummy (Simulasi Database)
        // Sesuaikan 'key' (judul, deskripsi) dengan kebutuhan tugas Anda
        $data_tugas = [
            [
                'judul' => 'Tugas Matematika',
                'deskripsi' => 'Mengerjakan Halaman 50 - Aljabar',
                'status' => 'Selesai'
            ],
            [
                'judul' => 'Tugas Laravel',
                'deskripsi' => 'Membuat Controller dan View',
                'status' => 'Belum Selesai'
            ],
            [
                'judul' => 'Laporan Proyek',
                'deskripsi' => 'Bab 1 Pendahuluan',
                'status' => 'Proses'
            ]
        ];

        $judul_halaman = 'Daftar Tugas Saya';

        // 2. Mengirim Data ke View
        // Pastikan nama view ('tugas.index') sesuai dengan nama file blade Anda
        return view('tugas', [
            'tugas' => $data_tugas,
            'judul' => $judul_halaman
        ]);
    }
}