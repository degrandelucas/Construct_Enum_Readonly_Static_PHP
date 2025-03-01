<?php
class Motos extends Automoveis
{
    public function __construct(
        Marcas $marca,
        public readonly String $estilo,
        string $cor,
        $ano
    )
    {
        parent::__construct($marca, $cor, $ano);
    }
}