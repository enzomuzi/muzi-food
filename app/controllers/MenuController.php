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

    public function inserirProduto($post) {
        if($this->model->inserir($post)) {
            return 'Inserido com sucesso!';
        } else {
            return 'Falha ao inserir o produto.';
        }
    }

    public function fazerPedido($post) {
        if($this->model->fazer($post)) {
            return 'Pedido realizado com sucesso!';
        } else {
            return 'Falha ao fazer pedido.';
        }
    }
}