<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class ContactModel
{
    private $connect;
    public $connection;


    public function __construct()
    {
        $this->connect = new ConnectDb();
        $this->connect = $this->connect->connection();
    }

    public function buscarContatos()
    {
        $result = mysqli_query($this->connection, "SELECT * FROM contacts");

        if (!$result) {
            echo "Erro ao executar consulta: " . mysqli_error($this->connection);
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                print_r($row);
            }
        }
    }
}