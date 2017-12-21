<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>ASPERA - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    @yield('head')
</head>
<body>
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="social_n pull-left">
                    <li><a href="https://www.facebook.com/ASPERApsixologiyamerkezi" target="_blank" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/aspera_merkez/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCAUFGeD-Rs9l4aPEjZt46zA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <address class="pull-left">
                    <a href="tel:+994125940032"><i class="fa fa-phone" aria-hidden="true"></i> (012) 594 00 32</a>
                    <a href="tel:+9940519997940"><i class="fa fa-phone" aria-hidden="true"></i> (051) 999 79 40</a>
                </address>
                <!-- Authentication Links -->
                <ul class="pull-right">
                    @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Giriş</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Qeydiyyat</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> Profil</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out" aria-hidden="true"></i> Çıxış
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
<nav id="nav" class="navbar navbar-default" data-spy="affix" data-offset-top="33">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background: transparent;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <img src="img/logo.png" class="img-responsive">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class="active"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><a href="/services">Xidmətlər</a></li>
                <li><a href="/psychologists">Mütəxəssislər</a></li>
                <li><a href="/articles">Məqalələr</a></li>
                <li><a href="/questions">Suallar</a></li>
                <li><a href="/news">Yeniliklər &amp; Təlimlər</a></li>
                <li><a href="/address">Ünvan</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer>
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 text-center">
                <ul>
                    <li><a href="https://www.facebook.com/ASPERApsixologiyamerkezi" target="_blank" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/aspera_merkez/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCAUFGeD-Rs9l4aPEjZt46zA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
                <ul>
                    <li><a href="/home" class="active"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="/services">Xidmətlər</a></li>
                    <li><a href="/psychologists">Mütəxəssislər</a></li>
                    <li><a href="/articles">Məqalələr</a></li>
                    <li><a href="/questions">Suallar</a></li>
                    <li><a href="/news">Yeniliklər &amp; Təlimlər</a></li>
                    <li><a href="/address">Ünvan</a></li>
                </ul>
                <hr>
                <p>&copy; ASPERA - Psixoloji Yardım və İnkişaf Mərkəzi</p>
           </div>
       </div>
    </div>
</footer>
@yield('js')
</body>
</html>
