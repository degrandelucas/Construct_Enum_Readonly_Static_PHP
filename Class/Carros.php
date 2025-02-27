<?php

class Carros
{
    private Marcas $marca;
    private String $modelo;
    private String $cor;
    private int $ano;

    public function __construct($marca, $modelo, $cor, $ano) //use the constructor
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getMarca(): Marcas //getter
    {
        return $this->marca;
    }

}