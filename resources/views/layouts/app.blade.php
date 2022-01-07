<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>posty</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center" >
            <li class="p-3">
                <a href="">Home</a>
            </li>
            <li class="p-3">
                <a href="">Dashhboard</a>
            </li>
            <li class="p-3">
                <a href="/posts">Posts</a>
            </li>

        </ul>

        <ul class="flex items-center" >
            <li class="p-3">
                <a href="">Asim Kattel</a>
            </li>
            <li class="p-3">
                <a href="">Login</a>
            </li>
            <li class="p-3">
                <a href="/register">Register</a>
            </li>
            <li class="p-3">
                <a href="">Logout</a>
            </li>

        </ul>

    </nav>
    @yield('content')
</body>
</html>