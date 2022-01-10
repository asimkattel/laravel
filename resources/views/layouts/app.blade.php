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
                <a href="/">Home</a>
            </li>
            <li class="p-3">
                <a href="/dash">Dashhboard</a>
            </li>
            <li class="p-3">
                <a href="/posts">Posts</a>
            </li>

        </ul>

        <ul class="flex items-center" >
            @if(auth()->user()!=null)
            <li class="p-3">
                <a href="">{{auth()->user()->username}}</a>
            </li>

        <!--  -->
            
            <li class="p-3">
                <a href="/logout">Logout</a>
            </li>
            @else

            <li class="p-3">
                <a href="/login">Login</a>
            </li>
            <li class="p-3">
                <a href="/register">Register</a>
            </li>
            @endif
         

        </ul>

    </nav>
    @yield('content')
</body>
</html>