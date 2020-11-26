<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARCAFE</title>
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/responsive.css">
</head>
<body>

    <div class="header">
        <div class="language-container">
            <div class="button-container">

                  @php $locale = session()->get('locale'); @endphp

                  <ul class="show-actually-language">
                    <li>
                        @switch($locale)
                         @case('en')
                         Inglés
                         @break
                         @case('es')
                         Español
                         @break
                         @default
                         Español
                        @endswitch

                        <span class="subMenuOpen" data-numero="3">⯆</span>

                        <ul class="dropdown-container" id="sub-menu3">
                            <li><a class="dropdown-item" href="locale/en">Inglés</a></li>
                            <li><a class="dropdown-item" href="locale/es">Español</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
            

        </div>


        <div class="menu-container">

        <img src="img/icons/logo.png" alt="Logotipo" id="logotipo">

        <!-- PARTE IMPORTANTE DEL MENU -->

        <div class="links-section">
            <ul class="menu-links">
                <!-- LOS IF EN ESTA PARTE ES PARA COLOREAR POR MEDIO DE UNA CLASE CUANDO UNA DE LAS OPCIONES ESTÉ SELECCIONADA -->
            <li><a href="{{route('welcome')}}" @if (Request::url() == route('raiz') || Request::url() == route('welcome')) class = "selected" @endif>{{ __('Home')}}</a></li>

            <li class="link-with-arrow">

                <div class="arrow-link">
                    <a href="{{route('about')}}" @if(Request::url() == route('about') || Request::url() == route('ourTeam')) class="selected" @endif>{{ __('Sómos Carcafe')}}</a><span class="subMenuOpen" data-numero="1">⯆</span>
                </div>

                <div class="sub-menu-container">
                    <ul id="sub-menu1" class="sub-menus">
                    <li><a href="{{route('about')}}">{{__('Quienes Somos')}}</a></li>
                    <li><a href="{{route('ourTeam')}}">{{__('Nuestro equipo')}}</a></li>
                        <li><a href="#">{{__('Conoce nuestra casa matriz')}} </a></li>
                    </ul>
                </div>


            </li>

        <li><a href="{{route('ourContribution')}}" @if(Request::url() == route('ourContribution')) class="selected" @endif>{{ __('Nuestro Aporte')}}</a></li>

                <li class="link-with-arrow">

                <div class="arrow-link">
                    <a href="{{route('we')}}" @if(Request::url() == route('we')) class="selected" @endif>{{ __('Compramos su café')}}</a><span class="subMenuOpen" data-numero="2">⯆</span>
                </div>

                <div class="sub-menu-container">
                    <ul id="sub-menu2" class="sub-menus">
                        <li><a href="#"> {{__('Donde compramos su café')}} </a></li>
                        <li><a href="#"> {{__('Comerciantes')}} </a></li>
                        <li><a href="#"> {{__('Caficultores')}} </a></li>
                    </ul>
                </div>

                </li>

                <li><a href="#">{{ __('Producto')}}</a></li>
                <li><a href="#">{{ __('Trabaja con nosotros')}}</a></li>
            </ul>

            <span id="menu-separator"></span>

            <ul class="social-links-container">
                <li><a href="#"><img src="img/icons/fb.png" alt="facebook logo"></a></li>
                <li><a href="#"><img src="img/icons/ig.png" alt="instagram logo"></a></li>
                <li><a href="#"><img src="img/icons/twitter.png" alt="twitter logo"></a></li>
            </ul>
        </div>


        </div>

    </div>


    @if(Request::url() == route('welcome') || Request::url() == route('raiz'))
    <div class="hero-container">
        <div class="img-hero-mask">

        <img alt="Hero image" id="img1">
        <img alt="Hero image" id="img2">

            <!-- ESTE SPAN ES EL FILTRO PARA QUE LAS IMÁGENES SE VEAN OSCURAS -->
            <span></span>
        </div>


        <div class="main-info-container">
            <div class="info-container">

                <!-- EN ESTA PARTE SE CONTROLA QUE TITULO VA EN QUE PAGINA (YA QUE EN CADA UNA ES DISTINTO TEXTO PERO CON MISMO DISEÑO) -->

                <h2>{{ __('Somos el mejor aliado en café')}}<br>{{ __('en Colombia.')}}</h2>

                <div class="arrows-container">
                    <img src="img/icons/left-arrow.png" alt="left arrow" id="left-arrow"><img src="img/icons/right-arrow.png" alt="right arrow" id="right-arrow">
                </div>
            </div>

            <div id="indicators-container"></div>
        </div>
    </div>

    @else

    <div class="normal-main-header-container">

        <div class="img-hero-mask">
            @if(Request::url() == route('about'))
            <img src="img/templates/banners/about.jpg" alt="about banner">
            @elseif(Request::url() == route('ourTeam'))
            <img src="img/templates/banners/ourTeam.jpg" alt="about banner">
            @elseif(Request::url() == route('ourContribution'))
            <img src="img/templates/banners/ourContribution.jpg" alt="about banner">
            @endif
            <span></span>
        </div>

        <div class="main-info-normal-container">

            <div class="info-normal-container">
                @if(Request::url() == route('about'))

                <div class="title-main-container">
                    <h2>{{ __('Quienes Somos')}}</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                @elseif(Request::url() == route('ourTeam'))

                <div class="title-main-container">
                    <h2>{{ __('Nuestro equipo')}}</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                @elseif(Request::url() == route('ourContribution'))

                <div class="title-main-container">
                    <h2>{{ __('Nuestro Aporte')}}</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>


                @endif
            </div>

        </div>


    </div>

    @endif

    @yield('content')


    <div class="footer-container">

        <div class="logo-footer-container">
            <img src="img/icons/logo.png" alt="Logotipo">
        </div>


        <div class="middle-wrap-footer-container">
            <article><h2>Hacemos parte de&nbsp</h2><img src="img/icons/volcafe-logo.png" alt="Volcafe logotype"></article>
            <p>El mejor aliado de café a nivel global.</p>
        </div>

        <div class="social-container">
            <a href="#"> <img src="img/icons/fb.png" alt="facebook image"> </a>
            <a href="#"> <img src="img/icons/ig.png" alt="instagram image"> </a>
            <a href="#"> <img src="img/icons/twitter.png" alt="twitter image"> </a>
        </div>
    </div>

    <script src="js/menu.js"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/slider-home.js"></script>
    <script src="js/slider-ourteam.js"></script>
    <script src="js/slider-destacado.js"></script>
    <script src="js/slideshow-blocks.js"></script>
</body>
</html>
