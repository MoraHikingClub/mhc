<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mora Hiking Club</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #1f2025;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #1f2025;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: #45b79d;
        }

        #sidebar ul li a:hover {
            color: #1aa988;
            background: #fff;
            text-decoration: none;
        }

        #sidebar ul li.active>a {
            color: #fff;
            background: #4fab67;
        }

        a[aria-expanded="true"] {
            color: #fff;
            background: #1f2025;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #1f2025;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

        #content {
            width: calc(100% - 250px);
            padding: 0;
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }

        #content.active {
            width: 100%;
        }

        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                width: 100%;
            }

            #content.active {
                width: calc(100% - 250px);
            }

            #sidebarCollapse span {
                display: none;
            }
        }

        .admin-frame {
            width: 100%;
            height: 100vh
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .logo {
            width: 190px;
        }

        .logo>img {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a class="navbar-brand logo" href="/"><img src="{{ asset('images/logo.png') }}" alt=""
                        class="d-inline-block" /></a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{ route('account.overview') }}" target="admin-frame">Overview</a>
                </li>
                <li>
                    <hr style="border-top: 1px solid rgba(255, 255, 255, 0.5);">
                </li>
                <li>
                    <a href="#postSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Blog
                        posts</a>
                    <ul class="collapse list-unstyled" id="postSubmenu">
                        <li>
                            <a href="{{ route('posts.create',['post_type' => 'blog']) }}" target="admin-frame">New
                                post</a>
                        </li>
                        <li>
                            <a href="{{ route('posts.list') }}" target="admin-frame">All posts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}" target="admin-frame">Tags</a>
                </li>
                <li>
                    <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">News</a>
                    <ul class="collapse list-unstyled" id="newsSubmenu">
                        <li>
                            <a href="{{ route('posts.create',['post_type' => 'news']) }}" target="admin-frame">New
                                news</a>
                        </li>
                        <li>
                            <a href="{{ route('posts.news_list') }}" target="admin-frame">All news</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#knowledgeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Knowledge</a>
                    <ul class="collapse list-unstyled" id="knowledgeSubmenu">
                        <li>
                            <a href="{{ route('knowledge.create') }}" target="admin-frame">New card</a>
                        </li>
                        <li>
                            <a href="{{ route('knowledge.list') }}" target="admin-frame">All cards</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#albumSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Album</a>
                    <ul class="collapse list-unstyled" id="albumSubmenu">
                        <li>
                            <a href="{{ route('albums.create') }}" target="admin-frame">New album</a>
                        </li>
                        <li>
                            <a href="{{ route('albums.index') }}" target="admin-frame">Album list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <hr style="border-top: 1px solid rgba(255, 255, 255, 0.5);">
                </li>
                <!--li>
                    <a href="{{ route('account.home') }}" target="admin-frame">Users</a>
                </li-->
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-success"
                    style="position:fixed;margin-left:20px;top:40px;">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>
            <iframe name="admin-frame" frameborder="0" src="{{ (Auth::user()->role_id == 3) ? route('account.home') : route('account.overview') }}" class="admin-frame"></iframe>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        
        $( document ).on( "click", function( event ) {
            $('li').removeClass('active');
            $( event.target ).closest( "li" ).toggleClass( "active" );
        });
    </script>
</body>

</html>