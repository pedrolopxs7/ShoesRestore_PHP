<?php

class Produto {
    public $id;
    public $cor;
    public $modelo;
    public $ano;
    public $tipoReparo;
    public $informacoesAdicionais;
    public $statusReparo;

    public function __construct($id, $cor, $modelo, $ano, $tipoReparo, $informacoesAdicionais, $statusReparo) {
        $this->id = $id;
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->tipoReparo = $tipoReparo;
        $this->informacoesAdicionais = $informacoesAdicionais;
        $this->statusReparo = $statusReparo;
    }

    
    
}
?>
