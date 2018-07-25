<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>TodoList App</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-5">
        @include('partials.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center mt-5">
        <p>Copyright 2018 &copy; VMC</p>
    </footer>
</body>
</html>