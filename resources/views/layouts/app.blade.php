<?php
    require_once "..//config/functions.php";
    //Header menu associative array
    $headerMenu = [
        'Home' => 'index.php',
        'About' => 'about.php',
        'Contact' => 'contact.php',
        'Register' => '',
        'Login' => '',
        'Logout' => '',
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Oh Baby</title>
</head>
<body class="bg-gray-100">
    <nav class="p-10 bg-white flex justify-between">
        <?php
            echo displayNavigation($headerMenu) 
        ?>

        <!--Logo-->

        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Kimberly Palma</a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-search"></i></a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="" class="p-3"><i class="fa fa-shopping-bag"></i></a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
<footer class="bg-black text-white p-10">
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
                    <a href="" class="p-3"><i class="fa fa-search"></i></a>
                </li>
                <li>
                    <a href="" class="p-3"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="" class="p-3"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="" class="p-3"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</html>