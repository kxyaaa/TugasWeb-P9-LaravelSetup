<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Menampilkan data dinamis (array)[cite: 1]
        $features = [
            'Kecepatan' => 'Routing dan eksekusi yang cepat.',
            'Keamanan' => 'Sistem keamanan bawaan yang tangguh.',
            'Desain' => 'Menggunakan Tailwind CSS untuk UI.'
        ];
        return view('welcome', compact('features'));
    }

    public function about()
    {
        // Data array untuk halaman About[cite: 1]
        $team = [
            ['nama' => 'Keisya', 'role' => 'Project Manager'],
            ['nama' => 'Fadilah', 'role' => 'Lead Programmer'],
            ['nama' => 'Khairunnisa', 'role' => 'UI/UX Designer']
        ];
        return view('about', compact('team'));
    }

    public function contact()
    {
        // Data array untuk halaman Contact[cite: 1]
        $kontak = [
            'email' => 'tugas@laravelp9.com',
            'github' => 'TugasWeb-P9-LaravelSetup'
        ];
        return view('contact', compact('kontak'));
    }

    public function hello($nama)
    {
        // Menangkap parameter dari route[cite: 1]
        return view('hello', compact('nama'));
    }
}