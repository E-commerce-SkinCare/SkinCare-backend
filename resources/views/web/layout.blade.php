<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-commerce - @yield('title')</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/navbar.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/footer.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield ('styles')

</head>

<body>

    <!-- Header -->
    <header>
            <ul>
                <li><a class="task" href="#">Home</a></li>
                <li><a class="task" href="#">Cart</a></li>
                <li><a class="task" href="#">Profile</a></li>
                <li><a class="task" href="#">Sign in</a></li>
                <li><a class="task" href="#">Sign up</a></li>
                <li><a class="task" href="#">Sign out</a></li>
            </ul>
        </header>
    <!-- /Header -->


    @yield('content')

    <!-- Footer -->

<div class="container">
    <b>Skin care</b>
        <div class="text1">
            <h3 class="con">Contact Us </h3>
            <div class="text2">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-solid fa-g"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>

            </div>
        </div>

    <!-- /Footer -->
    @yield('scripts')
</body>

</html>
