<?php
namespace controllers;

use Controller;

class HomeController extends Controller {

    public function __construct() {
        parent::__construct(); // Se Controller tem um construtor que inicializa view
    }

    public function index() {
        $this->view->render('index'); // Verifique se "index" é o nome correto da view
    }
}
