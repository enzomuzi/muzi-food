<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class ContactModel
{
    private $connect;
    public $connection;


    public function __construct()
    {
        $this->connection = (new ConnectDb())->connection(); // Cria a conexão
    }

    public function contato($post)
    {
        $name = $post['name'];
        $email = $post['email'];
        $phone = $post['phone'];
        $message = $post['message'];

        $sql = "INSERT INTO contacts (name, email, phone, message) values ('$name', '$email', '$phone', '$message')";
        
        return mysqli_query($this->connection, $sql);
    }
}