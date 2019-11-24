<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Mora Hiking Club, University of Moratuwa, Hiking, Trekking, Mountaineering, Camping, Backpacking">
    <link rel="icon" href="{{ asset('favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scroll-entrance.js') }}"></script>
    <div class="loader-bg">
        @php
            $launch = isset($launch) ? $launch : '';
        @endphp

        @if($launch)
        <span class="loading" style="font-weight:1000;font-size:300px;top:100px;" id="num">5</span>
        <p class="loading" style="font-weight:1000;font-size:200px;">Launching<span>.</span><span>.</span><span>.</span></p>
        <script>
            var i = 1
            var interval = setInterval(function(){
                document.getElementById('num').innerHTML = 5-i;
                if(i==5){
                    clearInterval(interval);
                    const loader = document.querySelector(".loader-bg");
                    loader.className += " hidden";
                }
                i++;
            },1000);
        </script>
        @else
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
        @endif
    </div>

    @include('layouts.messages')

    @yield('content')

    @yield('script')
</body>

</html>
