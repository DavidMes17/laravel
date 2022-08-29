<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" class="favicon" href="/assets/3e-logo-color.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/static.css">
        <link rel="stylesheet" href="./css/welcome.css">
        <link rel="stylesheet" href="./css/about.css">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <title>@yield('title')</title>
        
    </head>
    <body>
        <header class="sec-start">
            <div class="container">
                <nav class="menu" id="nav">
                    <img src="/assets/logo3e.png" class="logo-3e" alt="">
                    
                    <button id="btn-mobile"> <span id="icon-menu"></span> </button>
                    <ul class="items" role="menu">
                    <li><a href="/">Inicio</a></li>
                        <li><a href="#Descarte">Descarte</a></li>
                        <li><a href="#Nossos_Projetos">Nossos Projetos</a></li>
                        <li><a href="/Sobre">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>@yield('content')</main>

    
        <footer class="rodape" id="rodapeTribute"> 
        <div id="linha-horizontal">
</div>
<div class="icon">
<img class="logo-3e" src="/assets/logo3e.png" alt=""> </img>
        <p style="color: white;">&copy; 3E Soluções</p>

        <a href="#"><img src="/assets/linkedin.png" class="linedin" alt=""></a>
        <a href="#"><img src="/assets/facebook.png" class="face" alt=""></a>
        <a href="#"><img src="/assets/whatsapp.png" class="wpp" alt=""></a>

    </div>
</footer>

    </body>
    <script src="./js/scriptStatic.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>
