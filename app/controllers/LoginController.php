<?php

require_once __DIR__ . '/../models/ClientsModel.php';  // Caminho relativo do controlador para o modelo

class LoginController
{
    public $model;

    public function __construct()
    {
        // Instanciar o modelo de clients
        $this->model = new ClientsModel();
    }
}