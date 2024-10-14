<?php

require_once __DIR__ . '/../models/ContactModel.php';  // Caminho relativo do controlador para o modelo

class ContactController
{
    public $model;

    public function __construct()
    {
        // Instanciar o modelo de contato
        $this->model = new ContactModel();
    }

    public function entrarContato($post) {
        if($this->model->contato($post)) {
            return 'Enviado com sucesso!';
        } else {
            return 'Falha ao enviar.';
        }
    }
}