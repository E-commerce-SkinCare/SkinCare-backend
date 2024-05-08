<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Glowy| @yield('title')</title>
    <!-- <link type="text/css" rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/navbar.css')}}">
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('web/css/index.css')}}"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('web/css/footer.css')}}">
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('web/css/style copy.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles')
</head>
<body>
    <header class="navbar">
        <form id="logout-form" method="POST" action="{{url('logout')}}" style="display: none;">
                        @csrf
        </form>
        <ul>
            <li><a class="task" href="{{url('/')}}">Home</a></li>
            <li><a class="task" href="{{url('/cart')}}">Cart</a></li>

            @guest
                <li><a class="task" href="{{url('login')}}">Sign in</a></li>
                <li><a class="task" href="{{url('register')}}">Sign up</a></li>
            @endguest
            @auth
                <li><a class="task" href="{{url('/profile')}}">Profile</a></li>
                <li><a id="logout-link" class="task" href="#">Sign out</a></li>

            @endauth

        </ul>

    </header>
    @yield('content')

    <!-- Footer -->
<footer>
<div class="container">
            <b>Skin care</b>

                <div class="contact">
                    <h3 class="con">Contact Us </h3>
                    <div class="contact2">

                        <a  class="contactIcon" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="contactIcon" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <!-- <a class="contactIcon" href="#"><i class="fa-solid fa-g"></i></a> -->
                        <a class="contactIcon" href="#"><i class="fa-brands fa-linkedin"></i></a>

                    </div>
</div>
</div>

</footer>



    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{ asset('web/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('web/js/main.js')}}"></script>
    <script>
        $('#logout-link').click(function(e){
            e.preventDefault();
            $('#logout-form').submit();
        });
    </script>
    @yield('scripts')
</body>

</html>
