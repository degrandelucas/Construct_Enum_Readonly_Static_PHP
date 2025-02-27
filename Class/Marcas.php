<?php

enum Marcas: int{
    case Fiat = 1;
    case Ford = 2;
    case Chevrolet = 3;
    case Hyundai = 4;

    public function getNomeCompleto(): string
    {
        return match($this){
            self::Fiat => 'Fiat Automóveis',
            self::Ford => 'Ford Automóveis',
            self::Chevrolet => 'Chevrolet Automóveis',
            self::Hyundai => 'Hyundai Automóveis',
        };
    }
}