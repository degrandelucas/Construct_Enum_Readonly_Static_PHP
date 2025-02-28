<?php

class Automoveis
{
    private int $ano;
    private static int $espacoGaragemCarros = 5;
    private static int $totalCarrosGaregem = 0;

    public function __construct(
        // Propriedade readonly, use in constructor and automatically create a parameter
        public readonly Marcas $marca,
        public readonly string $modelo,
        public readonly string $cor,
                               $ano
    )
    {
        $this->ano = $ano;
        self::$totalCarrosGaregem++; //increase the total of cars in the garage with constructor call
    }

    public static function verificarEspaco(): bool
    {
        return self::$totalCarrosGaregem < self::$espacoGaragemCarros;
    }

    public static function espacoNaGaragem(): int
    {
        return self::$espacoGaragemCarros - self::$totalCarrosGaregem;
    }

    /*    public function getMarca(): Marcas //getter
        {
            return $this->marca;
        }*/

}