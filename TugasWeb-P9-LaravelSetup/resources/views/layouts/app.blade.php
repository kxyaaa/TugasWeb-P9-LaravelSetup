<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugas Rutin 9')</title>
    <!-- Tailwind CSS CDN (Syarat Bonus) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col font-sans selection:bg-indigo-500 selection:text-white">

    <!-- Navbar -->
    <nav class="bg-gray-800 border-b border-gray-700 shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                Laravel TR-9
            </a>
            <div class="space-x-6 font-semibold">
                <a href="/" class="hover:text-indigo-400 transition">Home</a>
                <a href="/about" class="hover:text-indigo-400 transition">About</a>
                <a href="/contact" class="hover:text-indigo-400 transition">Contact</a>
                <a href="/hello/Asisten" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow-md transition">Test Parameter</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto px-4 py-10 w-full flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-center py-6 border-t border-gray-700 mt-auto">
        <p class="text-gray-400 text-sm">&copy; 2026 <span class="font-bold text-indigo-400">TugasWeb-P9-LaravelSetup</span>. All rights reserved.</p>
    </footer>

</body>
</html>