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

    public function inserir($post)
    {
        $name = $post['name'];
        $description = $post['description'];
        $image = $post['image'];
        $price = $post['price'];

        $sql = "INSERT INTO products (name, description, image, price) values ('$name', '$description', '$image', '$price')";

        return mysqli_query($this->connection, $sql);
    }
}