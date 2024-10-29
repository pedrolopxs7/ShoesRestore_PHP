<?php

class Produto {
    private $id;
    private $cor;
    private $modelo;
    private $ano;
    private $tipoReparo;
    private $informacoesAdicionais;
    private $statusReparo;

    // Construtor da classe
    public function __construct($cor, $modelo, $ano, $tipoReparo, $informacoesAdicionais = "") {
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->tipoReparo = $tipoReparo;
        $this->informacoesAdicionais = $informacoesAdicionais;
        $this->statusReparo = "Pendente"; // Status inicial do produto
    }

    // Método para cadastrar um produto (exemplo de implementação)
    public function cadastrar() {
        // Lógica para salvar o produto no banco de dados
        // Exemplo: INSERT INTO produtos (cor, modelo, ano, tipoReparo, informacoesAdicionais, statusReparo) VALUES (...)
        echo "Produto cadastrado com sucesso!";
    }

    // Método para atualizar informações do produto
    public function atualizarInformacoes($novaCor, $novoModelo, $novoAno, $novoTipoReparo, $novasInformacoesAdicionais) {
        $this->cor = $novaCor;
        $this->modelo = $novoModelo;
        $this->ano = $novoAno;
        $this->tipoReparo = $novoTipoReparo;
        $this->informacoesAdicionais = $novasInformacoesAdicionais;

        // Lógica para atualizar o produto no banco de dados
        echo "Informações do produto atualizadas!";
    }

    // Método para obter o status atual do reparo
    public function obterStatus() {
        echo "ID:" . $this->id . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Tipo de Reparo: " . $this->tipoReparo . "<br>";
    }

    // Método para alterar o status do reparo do produto
    public function alterarStatus($novoStatus) {
        $this->statusReparo = $novoStatus;

        // Lógica para atualizar o status no banco de dados
        echo "Status do reparo atualizado para: " . $novoStatus;
    }

    // Getters para os atributos privados
    public function getId() {
        return $this->id;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getTipoReparo() {
        return $this->tipoReparo;
    }

    public function getInformacoesAdicionais() {
        return $this->informacoesAdicionais;
    }
}

produto1 = new Produto("01", "Vermelho", "Nike", "2020", "Pintura", "Gasto, muito sujo, aparencia de velho",)

$produto1->obterStatus ();
?>
