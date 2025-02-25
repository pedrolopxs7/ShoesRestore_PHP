<?php

class Usuario {
   
    public $usuario;
    public $email;
    private $cpf;
    private $senha;

    public function __construct($usuario, $email, $cpf, $senha, $id) {
        $this->usuario = $usuario;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
    }

    // exibir as informações do cliente
    public function exibirUsuario() {
        echo "usuario: " . $this->usuario . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
    }
}

//novo cliente
$cliente1 = new Cliente("Operador de Máquina", "pedro@email.com", "101.101.232-23",);

//informações do cliente
$cliente1->exibirCliente();

?> 