<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="margin: auto;">
        <div>
            <h1 style="text-align: center; font-size: 2rem; color: #0f172a;">You have new notification</h1>
        </div>

        <div style="padding: 1.5rem;">
            @yield('mail.content')
        </div>

        <div style="background-image: linear-gradient(135deg, #0f172a, #334155); margin-top: .85rem;">
            <div style="padding: .5rem;">
                <p style="text-align: center; color: #e2e8f0;">Asset Management <sup>&copy;</sup> 2023 | All Right Reserved</p>
                <br>
                <p style="text-align: center;">
                    <a href="{{ route('dashboard') }}" style="color: #e2e8f0;">View Website </a>|
                    <a href="{{ route('dashboard') }}" style="color: #e2e8f0;"> Privacy Policy</a>
                </p>
                <br>
                <p style="text-align: center; color: #e2e8f0;">If you have any questions please contact us <a href="#" style="color: #e2e8f0;">support@gmail.com</a></p>
            </div>
        </div>
    </div>
</body>
</html>
