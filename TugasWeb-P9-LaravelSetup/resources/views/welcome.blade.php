@extends('layouts.app')
@section('title', 'Welcome | Setup Laravel')

@section('content')
<div class="text-center mb-12 mt-8">
    <h1 class="text-5xl font-extrabold text-white mb-4 tracking-tight">Setup <span class="text-indigo-500">Laravel</span> Selesai! 🚀</h1>
    <p class="text-gray-400 text-lg max-w-2xl mx-auto">Tugas rutin pertemuan 9 berhasil dijalankan dengan arsitektur MVC yang bersih dan styling menggunakan Tailwind CSS.</p>
</div>

<div class="grid md:grid-cols-3 gap-8">
    @foreach($features as $judul => $deskripsi)
        <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 shadow-xl hover:-translate-y-2 hover:shadow-indigo-500/20 transition duration-300">
            <div class="w-12 h-12 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/30">
                <span class="text-indigo-400 font-bold text-xl">✨</span>
            </div>
            <h3 class="text-2xl font-bold text-white mb-3">{{ $judul }}</h3>
            <p class="text-gray-400 leading-relaxed">{{ $deskripsi }}</p>
        </div>
    @endforeach
</div>
@endsection