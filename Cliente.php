<?php

class Cliente {
   
    private $nome;
    private $email;
    private $cpf;
    public $id;

    public function __construct($nome, $email, $cpf, $id) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->id = $id;
    }

    // exibir as informações do cliente
    public function exibirCliente() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "ID: " . $this->id . "<br>";
    }
}

//novo cliente
$cliente1 = new Cliente("Pedro", "pedro@email.com", "101.101.232-23", "0001");

//informações do cliente
$cliente1->exibirCliente();

?> 