<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Yalla!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/screen.css') }}">
    <meta name="description" content="Yalla! Pour les Enfants est une association de droit français indépendante, ... Yalla! se donne pour mission première de remettre les enfants déscolarisés à la ...">
</head>
<body>
<header class="clearfix container-fluid header">
    <div class="head row">
        <ul>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 reseau">
                <a href="https://twitter.com/4yalla"><li><img src="{{ asset('img-layout/twitter.svg') }}"></li></a>
                <a href="https://www.facebook.com/yalla.enfants.syriens/?ref=br_rs"><li><img src="{{ asset('img-layout/facebook.svg') }}"></li></a>
            </div>

            <li class="col-xs-4 col-sm-3 col-md-3 col-lg-3 logo"><h1><a href="/"><img src="{{ asset('img-layout/logo.png') }}" alt="logo"></a></h1></li>
            <li class="col-xs-4 col-sm-2 menu">
                <img class="img_burger" src="{{ asset('img-layout/bg-menu.svg') }}">
            </li>
        </ul>

        <nav class="col-sm-6 col-md-6 col-lg-6">
            <ul>
                <li><a href="/qui-sommes-nous">Qui sommes-nous</a></li>
                <li><a href="/projets">Projets</a></li>
                <li><a href="/sengager">S'engager</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-sx-12 col-sm-3 col-md-3 col-lg-3 don">
        <h2><a href="/dons">Faire un don</a></h2>
    </div>
</header>
<div class="burger col-sm-12 col-md-12">
    <ul>
        <li><a href="/qui-sommes-nous">Qui sommes-nous</a></li>
        <li><a href="/projets">Projets</a></li>
        <li><a href="/sengager">S'engager</a></li>
        <li><a href="/contact">Contact</a></li>
        <li>
            <ul>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li class="dro">
                                <a href="/admin">
                                    Admin
                                </a>
                            </li>
                            <li class="dro>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </li>
    </ul>
</div>

@yield('content')
<footer class="clearfix footer">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-xs-12 foo-mobile">
                <a href=""><img src="{{ asset('img-layout/logo.png') }}"></a>
                <h2>2017 YALLA!, tous droits réservés</h2>
                <h3><a href="#">Mention légales</a></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <section class="foo col-sm-4 col-md-4">
                    <h3>A propos de nous</h3>
                    <p><a href="/qui-sommes-nous">Qui sommes-nous</a></p>
                    <p><a href="/projets">Projet</a></p>
                    <p><a href="#">Mentions légales</a></p>
                </section>
                <section class="foo col-sm-4 col-md-4">
                    <h3>Contact</h3>
                    <p><a href="#">Yalla@hotmail.fr</a></p>
                    <p><a href="#">10 rue rivoli</a></p>
                    <p><a href="#"> Paris</a></p>
                </section>
                <section class="foo col-sm-4 col-md-4">
                    <h3>Informations</h3>
                    <ul class="drop">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/admin">
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <p><a href="#">FAQ</a></p>
                    <p><a href="#">Cookies</a></p>
                    <p><a href="#">CGV</a></p>
                </section>
            </div>
            <div class="credits col-sm-12 col-md-12">
                <p>&copy; 2017 YALLA!, tous droits réservés</p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/burger.js') }}"></script>
<script>
</script>
</html>

