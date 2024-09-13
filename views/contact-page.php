<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/home-page/css/styles.css">
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
        <button class="navbar-toggler" type="button" data-toggle="colapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav mx-auto">
                <a href="/index.php" class="nav-item nav-link" id="home-menu">Página Inicial</a>
                <a href="/views/menu-page.php" class="nav-item nav-link" id="menu">Cardápio</a>
            </div>
            <div class="navbar-nav">
                <a href="/views/login-page.php" class="nav-item nav-link" id="acess-menu">Login/Registrar</a>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                <div class="login-content" style="background-color: #fff; padding: 10rem;">
                    <h1>Entre em contato</h1>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira o seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira o seu email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira o seu telefone">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 90px"></textarea>
                        <label for="floatingTextarea2">Mensagem</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                <div class="login-content" style="background-color: #fff; padding: 10rem;">
                    <div class="address">
                        <h3>Endereço</h3>
                        <p>Rua Lorem ipsum dolor sit amet. <br>
                            Bairro: Lorem, ipsum. <br>
                            Número: 77 <br>
                            CEP: 35300-000 <br>
                            Lorem/MG
                        </p>
                    </div>
                    <div class="address">
                        <h3>Telefone</h3>
                        <p>(33)99999-9999 <br>
                            (33)3333-3333
                        </p>
                    </div>
                    <div class="address">
                        <h3>Email</h3>
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="address">
                        <h3>Horário de funcionamento</h3>
                        <p>Ter - Sex: 18:00 a 00:00 <br>
                            Sab e Dom: 17:00 a 01:00 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    </footer>
    <script src="/assets/menu-page/js/scripts.js"></script>
</body>

</html>