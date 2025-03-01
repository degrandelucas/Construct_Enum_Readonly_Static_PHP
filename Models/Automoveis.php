<?php

class Automoveis
{
    private int $ano;
    private static int $espacoGaragemVeiculos = 5;
    private static int $totalVeiculosGaregem = 0;

    public function __construct(
        // Propriedade readonly, use in constructor and automatically create a parameter
        public readonly Marcas $marca,
        public readonly string $cor,
                               $ano
    )
    {
        $this->ano = $ano;
        self::$totalVeiculosGaregem++; //increase the total of cars in the garage with constructor call
    }

    public static function verificarEspaco(): bool
    {
        return self::$totalVeiculosGaregem < self::$espacoGaragemVeiculos;
    }

    public static function espacoNaGaragem(): int
    {
        return self::$espacoGaragemVeiculos - self::$totalVeiculosGaregem;
    }

    /*    public function getMarca(): Marcas //getter
        {
            return $this->marca;
        }*/

}