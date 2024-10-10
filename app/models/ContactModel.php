<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';
class ContactModel
{
    private $connect;
    public $connection;


    public function __construct()
    {
        $this->connection = (new ConnectDb())->connection(); // Cria a conexão
        if ($this->connection) {
            echo "Conexão estabelecida com sucesso!";
        } else {
            echo "Falha ao estabelecer conexão!";
        }
    }
    
    public function buscarContatos()
{
    $result = mysqli_query($this->connection, "SELECT * FROM contacts");

    if (!$result) {
        echo "Erro ao executar consulta: " . mysqli_error($this->connection);
        return; // Adicione um return para sair da função em caso de erro
    }

    if (mysqli_num_rows($result) == 0) {
        echo "Nenhum contato encontrado.";
        return;
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

}