<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>App</title>
</head>

<body class="bg-gray-200">
    <header class="mb-4">
        <nav class="p-4 bg-white flex justify-between">
            <div class="flex items-center">
                <span class="px-1">
                    <a href="{{ route('index') }}">Home</a>
                </span>
                <span class="px-1">
                    <a href="/about">About</a>
                </span>
                <span class="px-1">
                    <a href="/contact">Contact</a>
                </span>
            </div>
            <div class="flex items-center">
                <span><a class="p-1" href="/login">Login</a></span>
                <span><a class="p-1" href="{{ route('register') }}">Register</a></span>
            </div>
        </nav>
    </header>
    <main>
        @yield('page-content')
    </main>
</body>

</html>
