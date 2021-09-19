<?php
    require_once "..//config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Oh Baby</title>
</head>
<body class="bg-gray-200">
    <nav class="p-10 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="p-3">About</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="p-3">Contact</a>
            </li>
            @if (auth()->user())
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" >Logout</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
            @endif
        </ul>

        <!--Logo-->

        <ul class="flex items-center">
            @if (auth()->user())
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
            @endif
            <li>
                <a href="" class="p-3"><i class="fa fa-search"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank" class="p-3"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/" target="_blank" class="p-3"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/" target="_blank" class="p-3"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-shopping-bag"></i></a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
<footer class="bg-black text-white p-8">
    <div class="flex justify-between">
        <p>Copyright © Oh Baby, All rights reserved 2021</p>
        <div class="flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">Privacy Rules</a>
                </li>
                <li>
                    <a href="" class="p-3">Returns & Refunds</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank" class="p-3"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank" class="p-3"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/" target="_blank" class="p-3"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</html>
