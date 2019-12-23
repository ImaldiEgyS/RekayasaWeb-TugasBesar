    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css') }}/@yield('csstambahan')">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    <!-- START NAV -->
    <nav class="navbar is-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <!-- <img src="{{ asset('img/0 bulma.png') }}" alt="Logo"> -->
                    Hefa Computer
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
                    <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                            <div class="dropdown">
                        <button type="button" class="btn btn-info" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="row total-header-section">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <span class="badge badge-pill badge-danger">
                                        {{ count((array) session('cart')) }}
                                    </span>
                                </div>
        
                                <?php $total = 0 ?>
                                @foreach((array) session('cart') as $id => $details)
                                    <?php $total += $details['harga'] * $details['quantity'] ?>
                                @endforeach
        
                                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                    <p>Total: <span class="text-info">Rp {{ $total }}</span></p>
                                </div>
                            </div>
        
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{ asset('img') }}/{{ $details['gambar'] }}">
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p>{{ $details['merek'] }}</p>
                                            <p>{{ $details['seri'] }}</p>
                                            <p class="price text-info">Rp {{ $details['harga'] }}</p>
                                            <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <a class="navbar-item is-active" href="{{ url('/') }}">Home</a>
                        <a class="navbar-item">Catalog</a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">Account</a>
                            <div class="navbar-dropdown">
                                @guest
                                    <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                    <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif

                                @else
                                    <a id="navbarDropdown" class="navbar-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                @endguest
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
 
    @yield('iniIsi')
    @yield('scripts')

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

    <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

</body>
</html>