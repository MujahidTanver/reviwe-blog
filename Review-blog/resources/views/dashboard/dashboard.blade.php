<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>Review Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.css') }}">

    <link href="{{ asset('admin/assets/css/main.css')}}" rel="stylesheet" media="all">
    <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{('/home')}}">
                    <h2>Review Blog<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{('/home')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/blog')}}">Blog Entries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/dashboard')}}">Post Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/contacts')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('blog')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Dribbble</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright 2020 Stand Blog Co.

                            | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('admin/js/global.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owl.js') }}"></script>
    <script src="{{asset('admin/assets/js/slick.js') }}"></script>
    <script src="{{asset('admin/assets/js/isotope.js') }}"></script>
    <script src="{{asset('admin/ assets/js/accordions.js') }}"></script>
    <script src="{{asset('admin/assets/js/global.js')}}"></script>
    




    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

</body>

</html>