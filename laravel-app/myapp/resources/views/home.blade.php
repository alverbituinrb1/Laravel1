<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Home</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-purple-600 relative overflow-hidden">
    <div class="absolute w-60 h-60 bg-white opacity-20 rounded-full blur-3xl top-10 left-20 animate-pulse"></div>
    <div class="absolute w-40 h-40 bg-white opacity-20 rounded-full blur-3xl bottom-10 right-20 animate-pulse"></div>

    <h1 class="text-3xl font-bold text-white z-10">WELCOME TO HOME PAGE</h1>
</body>


</body>
</html>