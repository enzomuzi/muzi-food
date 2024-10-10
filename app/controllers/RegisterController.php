<?php

require_once __DIR__ . '/../models/ClientsModel.php';  // Caminho relativo do controlador para o modelo

class RegisterController
{
    public $model;


    public function __construct()
    {
        // Instanciar o modelo de clients
        $this->model = new ClientsModel();
    }

    public function inserirCliente($post) {
        if ($this->model->inserir($post)){
            return 'Inserido com sucesso!';
        }
    }
}