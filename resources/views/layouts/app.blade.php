<!doctype html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> EBS @yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


   
   <!--Template css link-->

   <link rel="shortcut icon" href="{{ asset('frontend/images/Favicon.ico') }}">
    <!-- CSS Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet"><!-- bootstrap css -->
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet"><!-- carousel Slider -->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" /><!-- font css --> 
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet" /><!-- Date picker css -->
    <link href="{{ asset('frontend/css/loader.css') }}" rel="stylesheet"><!-- Loader Box css -->
    <link href="{{ asset('frontend/css/docs.css') }}" rel="stylesheet"><!--  template structure css -->
    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class=" dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
       

                <div class="container">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="/home" class="navbar-brand"><img src="{{ asset('frontend/images/Event-book-Final-version-1.png') }}" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                            </button>
                            
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="@if(Route::current()->getName() == 'home') active @endif"><a href="{{route('home')}}">Home</a></li>
                                
                                <li class="@if(Route::current()->getName() == 'blog') active @endif"><a href="{{route('blog')}}">Blogs</a></li>
                                
                                <li class="@if(Route::current()->getName() == 'about-us') active @endif"><a href="{{route('about-us')}}">About Us</a></li>
                            </ul>
                                
                            <div class="search-box">
                                <div class="search-icon"><span class="icon icon-search"></span></div>
                                <div class="search-view">
                                    <div class="input-box">
                                        <form>
                                            <input type="text" placeholder="Search here">
                                            <input type="submit" value="" >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    

        

        
   @yield('content')


<br/><br/>
     <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <h5>About us</h5>
                            <div class="contact-slide">
                                <p>We always commited to you to provide any event with outstanding as your requirment.Our Event Planners organizationars always provide their Best to organized your event sucessfully.Thanks on Behahlaf of EBS</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="footer-contact">
                                <h5>Contact us</h5>
                                <div class="contact-slide">
                                    <div class="icon icon-location-1"></div>
                                    <p>74 West Main Street,Bonanni,Dhaka</p>
                                </div>
                                <div class="contact-slide">
                                    <div class="icon icon-phone"></div>
                                    <p>+8802-765 4321 ext 101</p>
                                </div>
                               
                                <div class="contact-slide">
                                    <div class="icon icon-message"></div>
                                    <a href="MailTo:info@eventplanning.com">info@event-booking-system.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="contact-form">
                                <h5>Connect with us</h5>
                                <div class="sosal-midiya">
                                    <ul>
                                        <li><a href="#"><span class="icon icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="icon icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon icon-linkedin"></span></a></li>
                                        <li><a href="#"><span class="icon icon-skype"></span></a></li>
                                        <li><a href="#"><span class="icon icon-google-plus"></span></a></li>
                                        <li><a href="#"><span class="icon icon-play"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Copyright &copy; <span></span> - Event Booking Searching Site | All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.selectbox-0.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/coustem.js') }}"></script>
</body>

</html>