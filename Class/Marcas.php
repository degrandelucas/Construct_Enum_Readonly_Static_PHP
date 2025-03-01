<?php

enum Marcas: int{
    case Fiat = 1;
    case Ford = 2;
    case Chevrolet = 3;
    case Hyundai = 4;
    case Honda = 5;

    public function getNomeCompleto(): string
    {
        return match($this){
            self::Fiat => 'Fiat Automóveis',
            self::Ford => 'Ford Automóveis',
            self::Chevrolet => 'Chevrolet Automóveis',
            self::Hyundai => 'Hyundai Automóveis',
            self::Honda => 'Honda Motos',
        };
    }
}