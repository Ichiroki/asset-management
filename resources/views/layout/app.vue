<template>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="dark:bg-slate-800">
            @include('layout.utils.sidebar')

            <div class="p-4 sm:ml-64 mt-24">
                <div class="container mx-auto" id="app">
                </div>
            </div>
            @vite('resources/js/app.js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
    </html>
</template>
