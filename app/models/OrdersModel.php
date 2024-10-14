<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class OrdersModel
{
    private $connect;
    public $connection;


    public function __construct()
    {
        $this->connection = (new ConnectDb())->connection(); // Cria a conexão
    }

    public function fazer($post)
    {
        $id_client = $post['id_client'];
        $id_product = $post['id_product'];
        $adress = $post['address'];

        $sql = "INSERT INTO products (id_client, id_product, address) values ('$id_client', '$id_product', '$addres')";

        return mysqli_query($this->connection, $sql);
    }
}