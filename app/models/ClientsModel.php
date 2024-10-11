<?php

// Inclui o arquivo ConnectDb.php, que contém a lógica de conexão com o banco de dados.
require_once __DIR__ . '/../../config/database/ConnectDb.php';

/**
 * Classe ClientsModel
 * 
 * Essa classe gerencia a interação com a tabela 'clients' no banco de dados,
 * permitindo a inserção de novos clientes e outras operações.
 */
class ClientsModel
{
    // Propriedade privada $connect (não usada diretamente neste código, mas pode ser útil para futuras implementações)
    private $connect;

    // Propriedade pública $connection para armazenar a conexão com o banco de dados
    public $connection;

    /**
     * Método construtor
     * 
     * Inicializa a conexão com o banco de dados ao criar uma nova instância da classe.
     */
    public function __construct()
    {
        // Cria uma nova instância de ConnectDb e armazena a conexão na propriedade $connection
        // Isso permite que a classe use essa conexão para executar queries no banco de dados.
        $this->connection = (new ConnectDb())->connection(); // Cria a conexão
    }

    /**
     * Método inserir
     * 
     * Recebe os dados do cliente a partir do array $post e insere esses dados na tabela 'clients'.
     * 
     * @param array $post Dados do cliente (name, email, password, phone).
     * @return bool Retorna true se a inserção for bem-sucedida, false em caso de falha.
     */
    public function inserir($post)
    {
        // Obtém os dados do array $post e os armazena em variáveis
        $name = $post['name'];
        $email = $post['email'];
        $password = $post['password'];
        $phone = $post['phone'];

        // Monta a query SQL para inserir um novo cliente na tabela 'clients'.
        // Os valores são passados diretamente na query, o que pode ser perigoso (vulnerável a injeção de SQL).
        // O ideal seria usar prepared statements para evitar essa vulnerabilidade.
        $sql = "INSERT INTO clients (name, email, password, phone) values ('$name', '$email', '$password', '$phone')";
        
        // Executa a query SQL utilizando a conexão do banco de dados e retorna true se for bem-sucedida, ou false em caso de falha.
        return mysqli_query($this->connection, $sql);
    }
}
