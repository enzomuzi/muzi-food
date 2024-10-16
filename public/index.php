<?php 
    require_once __DIR__ . "/../routes/Routes.php";
    $routes = new Routes();
?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzi's Food</title>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./home-page/css/styles.css">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/fd3baf7e36.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <h1 class="navbar-brand" id="logo">Muzi's Food</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav mx-auto">
                <a href="/menu" class="nav-item nav-link" id="menu">Cardápio</a>
                <a href="/contact" class="nav-item nav-link" id="contact-menu">Contato</a>
            </div>
            <div class="navbar-nav">
                <a href="/login" class="nav-item nav-link" id="acess-menu">Login/Registrar</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./home-page/img/img-carousel-1.png" class="d-block w-100" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./home-page/img/img-carousel-2.png" class="d-block w-100" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./home-page/img/img-carousel.png" class="d-block w-100" alt="Terceiro Slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="text-center">Sabor Artesanal em Cada Mordida</h1>
                    <p class="copy text-center">Delicie-se com nossos irresistíveis lanches artesanais na Muzi's Food. Criatividade, qualidade e sabor se encontram em cada mordida. Descubra uma experiência gastronômica única, onde ingredientes frescos e receitas autênticas se unem para criar momentos de pura satisfação. Visite-nos e experimente o melhor da culinária artesanal em cada prato.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-content">
        &copy;Enzo Muzi - 2024
    </footer>
    <script src="./assets/menu-page/js/scripts.js"></script>
</body>

</html>
