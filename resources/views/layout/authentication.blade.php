<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <title>Asset | Login</title>
  @vite('resources/css/app.css')
</head>
<body class="dark:bg-slate-800 bg-slate-100">

    <div class="container mx-auto" id="auth_layout">
        @yield('main')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script>
        // Get the user's operating system dark mode preference
        const userOsDarkModePreference = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const authLayout = document.getElementById('auth_layout')
        // If the user prefers dark mode, enable dark mode on your website
        if (userOsDarkModePreference) {
        document.documentElement.classList.add('dark');
        authLayout.style.backgroundImage = 'url('{{ asset('storage/img/dark.png') }}')'
        } else {
        document.documentElement.classList.remove('dark');
        authLayout.style.backgroundImage = 'url('{{ asset('storage/img/light.png') }}')'
        }
    </script>
</body>
</html>
