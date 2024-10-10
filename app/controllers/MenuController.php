<?php

require_once __DIR__ . '/../models/OrdersModel.php';  // Caminho relativo do controlador para o modelo
require_once __DIR__ . '/../models/ProductsModel.php'; // Caminho relativo do controlador para o modelo


class MenuController
{
    public $model;

    public function __construct()
    {
        // Instanciar o modelo de orders
        $this->model = new OrdersModel();
        $this->model = new ProductsModel();
    }
}