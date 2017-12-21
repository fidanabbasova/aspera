<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>ASPERA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
</head>
<body>
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Authentication Links -->
                <ul>
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
</body>
</html>