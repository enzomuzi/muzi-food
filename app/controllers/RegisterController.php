<?php

// Inclui o arquivo ClientsModel.php que está localizado no diretório acima de 'models'.
// Isso permite que o controlador utilize a classe ClientsModel para interagir com os dados dos clientes.
require_once __DIR__ . '/../models/ClientsModel.php';  // Caminho relativo do controlador para o modelo

/**
 * Classe RegisterController
 * 
 * Este controlador gerencia o registro de clientes, utilizando o modelo ClientsModel para interagir com o banco de dados.
 */
class RegisterController
{
    // Propriedade para armazenar a instância do modelo ClientsModel
    public $model;

    /**
     * Método construtor
     * 
     * Inicializa uma nova instância de ClientsModel quando uma nova instância de RegisterController é criada.
     */
    public function __construct()
    {
        // Instancia o modelo ClientsModel para que o controlador possa utilizar seus métodos.
        $this->model = new ClientsModel();
    }

    /**
     * Método inserirCliente
     * 
     * Este método recebe os dados do cliente através do parâmetro $post (geralmente dados de um formulário),
     * e utiliza o método inserir do modelo para adicionar o cliente ao banco de dados.
     * 
     * @param array $post Dados do cliente a serem inseridos (por exemplo, nome, email, telefone).
     * @return string Mensagem de sucesso se a inserção for bem-sucedida.
     */
    public function inserirCliente($post) {
        // Chama o método inserir do modelo ClientsModel passando os dados do cliente.
        if ($this->model->inserir($post)){
            // Retorna uma mensagem de sucesso caso a inserção seja realizada com sucesso.
            return 'Inserido com sucesso!';
        }
        // Opcional: Você pode adicionar uma mensagem de erro caso a inserção falhe.
        return 'Falha ao inserir o cliente.';
    }
}
