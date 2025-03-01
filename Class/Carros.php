<?php

class Carros extends Automoveis
{
    public function __construct(
        Marcas $marca,
        public readonly String $modelo,
        string $cor,
        $ano
    )
    {
        parent::__construct($marca, $cor, $ano);
    }
        /*    public function getMarca(): Marcas //getter
            {
                return $this->marca;
            }*/
}