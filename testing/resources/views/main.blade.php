<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css') }}/@yield('csstambahan')">

</head>
<body>
    <!-- START NAV -->
    <nav class="navbar is-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="{{ asset('img/bulma.png') }}" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active" href="{{ url('/') }}">Home</a>
                    <a class="navbar-item">Catalog</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Account</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ url('/login') }}">Login</a>
                            <a class="navbar-item" href="{{ url('/createmyaccount') }}">Create Account</a>
                            <a class="navbar-item" href="{{ url('/logout') }}">Logout</a>
                            <hr class="navbar-divider">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    @yield('iniIsi')

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <div class="soc">
                    <a href=""><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>Agung</a>
                    <a href="https://github.com/ThymeSeyU"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>Dae Gi</a>
                    <a href="https://github.com/ImaldiEgyS"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>Egy</a>
                    <a href=""><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>Fakhri</a>
                    <a href="https://github.com/fanfirman"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>Firman</a>
                </div>
                <p>
                    <strong>Hefa Computer</strong> by <a href="/">Clover</a>.
                    Task For Web Developer <a href="https://if.unpas.ac.id/">UNPAS</a>. <br>
                </p>
            </div>
        </div>
    </footer>
    
    <a class="myBtn" href="#top" onclick="scrollToTop();return false">▲</a>

    <script src="../js/bulma.js"></script>

</body>
</html>