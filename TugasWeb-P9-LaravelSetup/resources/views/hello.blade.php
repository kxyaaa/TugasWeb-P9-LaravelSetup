@extends('layouts.app')
@section('title', 'Hello ' . $nama)

@section('content')
<div class="flex items-center justify-center h-[50vh]">
    <div class="bg-gradient-to-br from-indigo-600 to-purple-600 p-[2px] rounded-3xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <div class="bg-gray-900 p-12 rounded-[22px] text-center">
            <span class="text-6xl mb-4 block">👋</span>
            <h2 class="text-4xl font-bold text-white">
                Halo, <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400 border-b-2 border-purple-500 border-dashed pb-1">{{ $nama }}</span>!
            </h2>
            <p class="mt-4 text-gray-400 font-medium">Ini adalah halaman dinamis menggunakan Parameter Route.</p>
        </div>
    </div>
</div>
@endsection