@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<div class="mb-10 text-center">
    <h2 class="text-4xl font-extrabold text-white mb-3">Tim <span class="text-purple-500">Pengembang</span></h2>
    <p class="text-gray-400">Menampilkan array multidimensi dari Controller.</p>
</div>

<div class="grid md:grid-cols-3 gap-6">
    @foreach($team as $member)
        <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700 text-center shadow-lg hover:border-purple-500 transition">
            <div class="w-20 h-20 bg-gradient-to-tr from-purple-500 to-indigo-500 rounded-full flex items-center justify-center text-3xl font-black text-white shadow-inner mx-auto mb-4">
                {{ substr($member['nama'], 0, 1) }}
            </div>
            <h3 class="text-xl font-bold text-white">{{ $member['nama'] }}</h3>
            <p class="text-purple-400 font-medium mt-1">{{ $member['role'] }}</p>
        </div>
    @endforeach
</div>
@endsection