<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body class="dark:bg-slate-800 bg-slate-100">

    <div class="container mx-auto">
        @yield('main')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script>
        // Get the user's operating system dark mode preference
        const userOsDarkModePreference = window.matchMedia('(prefers-color-scheme: dark)').matches;

        // If the user prefers dark mode, enable dark mode on your website
        if (userOsDarkModePreference) {
        document.documentElement.classList.add('dark');
        } else {
        document.documentElement.classList.remove('dark');
        }
    </script>
</body>
</html>
