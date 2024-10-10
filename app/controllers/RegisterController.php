<?php

require_once __DIR__ . '/../models/ClientsModel.php';  // Caminho relativo do controlador para o modelo
require_once __DIR__ . '/../models/UsersModel.php';  // Caminho relativo do controlador para o modelo


class RegisterController
{
    public $model;

    public function __construct()
    {
        // Instanciar o modelo de clients
        $this->model = new ClientsModel();
        $this->model = new UsersModel();
    }
}