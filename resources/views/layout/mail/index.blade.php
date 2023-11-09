<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border:">
        <h1 style="text-align: center; font-size: 2rem;">You have new notification</h1>
    </div>

    <div style="padding: 1.5rem;">
        @yield('mail.content')
    </div>

    <div style="background: #d1d5db;">
        @yield('mail.footer')
    </div>
</body>
</html>
