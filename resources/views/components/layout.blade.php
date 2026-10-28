<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <title>
        {{ config('app.name') }}
    </title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFEDD6] bg-grid min-h-dvh flex flex-col">
    {{-- Cabeçalho --}}
    <x-header />

    {{ $slot }}

    {{-- Rodapé --}}
    <x-footer />
</body>
</html>