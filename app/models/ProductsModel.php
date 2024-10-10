<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class ProductsModel
{
    private $connect;
    public $connection;


    public function __construct()
    {
        $this->connection = (new ConnectDb())->connection(); // Cria a conexão
    }
}