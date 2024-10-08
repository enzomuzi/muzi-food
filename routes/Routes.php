<?php

require_once __DIR__ . '/../app/controllers/ContactController.php';

class Routes 
{
    private $method;
    private $route;
    private $contactController; // -> variavel que sera utilizado para armazenar a instancia do controller

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->route = $_SERVER['REQUEST_URI'];
        $this->contactController = new ContactController();

        $this->routes();
    }

    private function routes() {
        switch ($this->method) {
            case "GET": 
                // verificar rota de contato
                if($this->route == "/contact") {
                    var_dump($this->contactController->buscarContatos()); // -> se nao der nenhum erro, deu certo
                    include_once "../app/views/contact-page.php";
                    exit;
                }
                //verificar rota de login
                if($this->route == "/login") {
                    include_once "../app/views/login-page.php";
                    exit;
                }
                // verificar rota de menu
                if($this->route == "/menu") {
                    include_once "../app/views/menu-page.php";
                    exit;
                }
                // verificar rota de registro
                if($this->route == "/register") {
                    include_once "../app/views/register-page.php";
                    exit;
                }
                //verificar rota de home
                if($this->route == "/" || $this->route == "/home") {
                    include_once "../public/index.php";
                } else {
                    if($this->route) {
                        include_once "../app/views/error-page.php";
                        exit;
                    }
                }
            break;
                case "POST": 
                    // verificar rota de contato

                    //verificar rota de login
    
                    // verificar rota de menu
    
                    // verificar rota de registro
    
                    if($this->route == "/" || $this->route == "/home") {
                        include_once "../public/index.php";
                    } else {
                        if($this->route) {
                            include_once "../app/views/error-page.php";
                            exit;
                        }
                    }
                break;
            default:
                include_once "../app/views/error-page.php";
                exit;
            break;
        }
    }
}