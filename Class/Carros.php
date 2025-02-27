<?php

class Carros
{
    private String $marca;
    private String $modelo;
    private String $cor;
    private int $ano;

    public function __construct($marca, $modelo, $cor, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getMarca() //getter
    {
        return $this->marca; //returning the value of the attribute
    }

}