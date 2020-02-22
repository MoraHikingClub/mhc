<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Mora Hiking Club, University of Moratuwa, Hiking, Trekking, Mountaineering, Camping, Backpacking">
    <link rel="icon" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset('assets/css/material-kit.css?v=2.0.6') }}" rel="stylesheet" />
    <link href="{{ asset('css/social-style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link
        href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    @yield('stylesheets')
    <style>
        .loader-bg{
            position:fixed;
            top:0;
            left:0;
            width:100vw;
            height: 100vh;
            background: white;
            z-index:1000;
        }

        .loader{
            overflow:hidden;
            width:100px;
            height:100px;
            border-radius:50%;
            border:2px solid black;
            position:fixed;
            top:50%;
            left:50%;
            margin:-50px 0 0 -50px;
        }

        .loader > img {
            width:100px;
        }

        .loader-bg.hidden{
            animation:fadeOut 1s;
            animation-fill-mode: forwards;
        }

        .loading{
            color:#000;
            position:fixed;
            width:100vw;
            text-align:center;
            top:58%;
            font-size:20px;
            font-weight:600;
        }

        .loading span{
            animation-name:blink;
            animation-duration:1.4s;
            animation-iteration-count: infinite;
            animation-fill-mode: both;
        }

        .loading span:nth-child(2){
            animation-delay: .2s;
        }

        .loading span:nth-child(3){
            animation-delay: .4s;
        }

        @keyframes fadeOut{
            100%{
                opacity:0;
                visibility: hidden;
            }
        }

        @keyframes blink{
            0%{
                opacity: .2;
            }

            20%{
                opacity: 1;
            }

            100%{
                opacity: .2;
            }
        }

        li.nav-item>.nav-link{
            padding-bottom:0;
        }
    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success fixed-top">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    <div class="logo-image">
                      <img src="{{ asset('images/logo-white-yoyo.png') }}" class="img-fluid">
                    </div>
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @if(Auth::check())
                        @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
                        <li class="nav-item">
                            <a href="{{ route('account.dashboard') }}" class="nav-link">
                            <i class="material-icons">dashboard</i>Dashboard
                            </a>
                        </li>
                        @endif
                        @if(!Auth::user()->activated)
                        <li class="nav-item">
                            <a href="{{ route('pdf') }}" class="nav-link">
                                <i class="material-icons">cloud_download</i>Download PDF
                            </a>
                        </li>
                        @endif
                    <li class="nav-item">
                        <a href="{{ route('account.account') }}" class="nav-link">
                            <i class="material-icons">account_circle</i>Account
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                          <i class="material-icons">settings</i>
                          <b class="caret"></b>
                        <div class="ripple-container"></div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">Settings</h6>
                            <a href="{{ route('account.edit') }}" class="dropdown-item">Edit account</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('signout') }}" class="dropdown-item">Log out</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="material-icons">arrow_back_ios</i>Back to site
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ (Route::currentRouteName() == 'getSignin') ? route('signup') : route('signin') }}" class="nav-link">
                            {{ (Route::currentRouteName() == 'getSignin') ? 'Sign up' : 'Login' }}
                        </a>
                    </li>    
                    @endif
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="loader-bg">
        <div class="loader">
            <img src="{{ asset('images\loading.gif') }}" alt="Loading" />
        </div>
        <p class="loading">Loading<span>.</span><span>.</span><span>.</span></p>
        <script type="text/javascript">
            window.addEventListener("load", function(){
                const loader = document.querySelector(".loader-bg");
                loader.className += " hidden";
            });
        </script>
    </div>

    @include('layouts.messages')

    @yield('content')
    
    @if(Auth::check())
        @if(!Auth::user()->activated)
            <div class="overlay">
                <div class="text">
                    <img src="{{ asset('images/logo-white-yoyo.png') }}" class="overlay-img"><br>
                    Welcome to Mora Hiking Club Yo-Yo Network
                    <div class="small">
                        Account activation pending
                    </div>
                </div>
            </div>
        @endif
    @endif

    @yield('script')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-kit.js?v=2.0.6') }}" type="text/javascript"></script>

    <!-- fixed header/ opaque on scroll -->
    

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var h = $(window).scrollTop();

                if (h > 500) {
                    $('header',).addClass('fixedheader');
                    $('.dropdown-menu').css('background','rgba(0,0,0,0.7)');
                } else {
                    $('header').removeClass('fixedheader');
                    $('.dropdown-menu').css('background','rgba(0,0,0,0.5)')
                }
            });
        });

    </script>

    @yield('script1')
</body>

</html>
