@extends('layouts.app')
@section('title', 'Contact Info')

@section('content')
<div class="max-w-xl mx-auto bg-gray-800 p-8 rounded-3xl border border-gray-700 shadow-2xl relative overflow-hidden">
    <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-500 rounded-full blur-[80px] opacity-30"></div>
    <h2 class="text-3xl font-extrabold text-white mb-8 relative z-10">Hubungi Kami 📬</h2>
    
    <div class="space-y-6 relative z-10">
        <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-700/50 flex items-center gap-4">
            <div class="p-3 bg-indigo-500/20 rounded-lg text-indigo-400">📧</div>
            <div>
                <p class="text-sm text-gray-400 mb-1">Alamat Email</p>
                <p class="text-lg font-bold text-white">{{ $kontak['email'] }}</p>
            </div>
        </div>
        <div class="bg-gray-900/50 p-5 rounded-xl border border-gray-700/50 flex items-center gap-4">
            <div class="p-3 bg-indigo-500/20 rounded-lg text-indigo-400">💻</div>
            <div>
                <p class="text-sm text-gray-400 mb-1">Repositori GitHub</p>
                <p class="text-lg font-bold text-white">{{ $kontak['github'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection