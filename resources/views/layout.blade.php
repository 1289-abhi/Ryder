<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryder | Cab Services</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a04b068b1e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
         
    <div class="navbar show-on-scroll" id="navbar">
        <span class="mobile-nav-button"><i class="fas fa-bars"></i></span>
    <div class="mobile-view">
        <i class="fas fa-times"></i>
    <ul>
        <li><a href="{{route('book')}}">Book A Trip</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('contact.show')}}">Contact Us</a></li>
        <li><a href="{{route('join')}}">Join Us</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
    </ul>
    </div>
        <a href="{{route('home')}}" class="logo">
            <img src="images/Logo.png" alt="logo">
            <p>Ryder</p>
        </a>
        <ul class="nav-icons-list">
            <a href="{{route('book')}}"><li class="nav-icon">Book A Trip</li></a>
            <a href="{{route('about')}}"><li class="nav-icon">About Us</li></a>
            <a href="{{route('contact.show')}}"><li class="nav-icon">Contact Us</li></a>
            <a href="{{route('join')}}"><li class="nav-icon">Join Us</li></a>
        </ul>

        @guest
            <a href="{{ route('login') }}" class="login-button">Login</a>
            <a href="{{ route('register-user') }}" class="register-button">Register</a>
        @else
            <a href="{{ route('signout') }}" class="login-button">Logout</a>
        @endguest

    </div>

    @yield('content')

    <div class="footer">
        <div class="upper">
        <div class="footer-links">
            <ul>
                <li class="footer-link"><a href="{{route('book')}}">Book A Ride</a></li>
                <li class="footer-link"><a href="{{route('about')}}">About Us</a></li>
                <li class="footer-link"><a href="{{route('join')}}">Join Us</a></li>
            </ul>
        </div>
            <div class="social">    
            <a href="{{route('home')}}"><img src="images/Logo.png" alt="" class="logo"></a>
                <ul class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </ul>
            </div>
            <div class="contact-details">
                <ul>
                    <li>30 A, Sant Nagar Ground Floor, East Of Kailash, Delhi, India</li>
                    <li>help@ryder.com</li>
                    <li>+91 98 2209 8220</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="lower">
            <div class="copyright">Copyright @2022 Ryder. All rights Reserved.</div>
        </div>
        
    </div>

    <div class="sticky-social-icons">
        <a href="#"><div class="icon"><i class="fab fa-facebook"></i></div></a>
        <a href="#"><div class="icon"><i class="fab fa-twitter"></i></div></a>
        <a href="#"><div class="icon"><i class="fab fa-instagram"></i></div></a>
        <a href="#"><div class="icon"><i class="fab fa-linkedin"></i></div></a>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
       <script src="js/show-on-scroll.js"></script>
       <script src="js/script.js"></script>
     
</body>
</html>