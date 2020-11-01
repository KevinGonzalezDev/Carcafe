<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARCAFE</title>
    <link rel="stylesheet" href="estilos/main.css">
</head>
<body>

<div class="header">
    <div class="language-container">
        
        <div class="button-container">

            <select name="language" id="language-button">
                <option value="Español">Español</option>
                <option value="Ingles">Inglés</option>
            </select>

        </div>
        
    </div>

    
    <div class="menu-container">

    <img src="img/icons/logo.png" alt="Logotipo" id="logotipo">

    <!-- PARTE IMPORTANTE DEL MENU -->

    <div class="links-section">
        <ul class="menu-links">
            <!-- LOS IF EN ESTA PARTE ES PARA COLOREAR POR MEDIO DE UNA CLASE CUANDO UNA DE LAS OPCIONES ESTÉ SELECCIONADA -->
        <li><a href="{{route('welcome')}}" @if (Request::url() == route('raiz') || Request::url() == route('welcome')) class = "selected" @endif>Home</a></li>
        <li><a href="{{route('about')}}" @if(Request::url() == route('about')) class="selected" @endif>Sómos Carcafe ▼</a></li>
            <li><a href="#">Nuestro Aporte</a></li>
            <li><a href="#">Compramos su café ▼</a></li>
            <li><a href="#">Producto</a></li>
            <li><a href="#">Trabaja con nosotros</a></li>
        </ul>
    
        <span id="menu-separator"></span>
    
        <ul>
            <li><a href="#"><img src="img/icons/fb.png" alt="facebook logo"></a></li>
            <li><a href="#"><img src="img/icons/ig.png" alt="instagram logo"></a></li>
            <li><a href="#"><img src="img/icons/twitter.png" alt="twitter logo"></a></li>
        </ul>        
    </div>

    
    </div>

</div>


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

            @if(Request::url() == route('welcome'))
            <h2>Somos el mejor aliado en café<br>en Colombia.</h2>
            @elseif(Request::url() == route('about'))
            <div class="title-main-container">
                <h2>Quienes Somos</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            @endif

            <div class="arrows-container">
                <img src="img/icons/left-arrow.png" alt="left arrow" id="left-arrow"><img src="img/icons/right-arrow.png" alt="right arrow" id="right-arrow">
            </div>
        </div>

        <div id="indicators-container"></div>
    </div>
    </div>

    <script src="js/slideshow.js"></script>
    <script src="js/slider-home.js"></script>
    <script src="js/slider-destacado.js"></script>

    @yield('content')
</body>
</html>