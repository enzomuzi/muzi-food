<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class ClientsModel
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
        $email = $post['email'];
        $password = $post['password'];
        $phone = $post['phone'];

        $sql = "INSERT INTO clients (name, email, password, phone) values ('$name', '$email', '$password', '$phone')";
        
        return mysqli_query($this->connection, $sql);
    }
}