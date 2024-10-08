<?php

class ContactModel
{
    public $connection;

    public function __construct()
    {

        $this->connection = mysqli_connect('localhost', 'root', '', 'Muzi_Food');

        if (mysqli_connect_errno()) {
            echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
            return;
        }

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
