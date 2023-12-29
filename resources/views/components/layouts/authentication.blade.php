<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <title>{{ $title ?? config('app.name') }}</title>
  {{-- <title>{{ config('app.name') }}</title> --}}
  @livewireStyles
  @vite('resources/css/app.css')
</head>
<body class="dark:bg-slate-800 bg-slate-100">

    <div class="container mx-auto">
        {{ $slot }}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script>
        const userOsDarkModePreference = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (userOsDarkModePreference) {
        document.documentElement.classList.add('dark');
        } else {
        document.documentElement.classList.remove('dark');
        }
    </script>
    @livewireScripts
</body>
</html>
