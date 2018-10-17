<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>@yield('meta-title', config('app.name'))</title>
        <meta name="description" content="@yield('meta-description', 'EmprendedoreSLP noticias, eventos y más forma parte de nosotros...')">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/framework.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    </head>
    <body>
        <div class="preload"></div>
        <header class="space-inter">
            <h1><center>EmprendedoreSLP</center></h1>
            <div class="container container-flex space-between">
                <figure class="logo"><a class="nav-link" href="{{ route('login') }}"><img src="/img/appicon.png" alt=""></a>
                </figure>
<!--Navegación del header-->
                <nav class="custom-wrapper" id="menu">
                    <div class="pure-menu">
                    
                    </div>
                    <ul class="container-flex list-unstyled">
                        <li>
                            <a href="{{route('pages.home')}}" class="text-uppercase {{request()->routeIs('pages.home') ? 'active' : ''}}">Noticias
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pages.event')}}" class="text-uppercase  {{request()->routeIs('pages.event') ? 'active' : ''}}">Eventos
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pages.about')}}" class="text-uppercase  {{request()->routeIs('pages.about') ? 'active' : ''}}">Nosotros
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pages.contact')}}" class="text-uppercase  {{request()->routeIs('pages.contact') ? 'active' : ''}}">Contacto
                            </a>
                        </li>
                    </ul>
                </nav>
<!--Fin de Navegación del header-->
            </div>

        </header>
<link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
        @if(session()->has('flash'))
            <div class="alert alert-success
    "><center>{{session('flash')}}</center></div>
        @endif

@yield("container")

        <section class="footer">
            <footer>
                <div class="container">
                    <a><figure class="logo"><img src="/img/Imagen2.png" alt=""></figure></a>
<!--Navegación del footer-->
                    <nav>
                        <ul class="container-flex space-center list-unstyled">
                            <li>
                                <a href="{{route('pages.home')}}" class="text-uppercase {{request()->routeIs('pages.home') ? 'active' : ''}}">Noticias
                                </a>
                            </li>
                            <li>
                                <a href="{{route('pages.event')}}" class="text-uppercase  {{request()->routeIs('pages.event') ? 'active' : ''}}">Eventos
                                </a>
                            </li>
                            <li>
                                <a href="{{route('pages.about')}}" class="text-uppercase  {{request()->routeIs('pages.about') ? 'active' : ''}}">Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="{{route('pages.contact')}}" class="text-uppercase  {{request()->routeIs('pages.contact') ? 'active' : ''}}">Contacto
                                </a>
                            </li>
                        </ul>
                    </nav>
<!--Fin de Navegación del footer-->
                    <div class="divider-2"></div>
                    <p>Un emprendedor ve soluciones donde otros ven problemas.</p>
                    <div class="divider-2" style="width: 100%;"></div>
                    <p>EmprendedoreSLP &reg; 2018.
                </div>
            </footer>
        </section>
    </body>
</html>