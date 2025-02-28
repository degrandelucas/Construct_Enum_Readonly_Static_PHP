<?php

require 'Class/Marcas.php'; //import the enum first
require 'Class/Carros.php';
require 'Class/Automoveis.php';

if (Carros::verificarEspaco()) {
    echo "Ainda há espaço na garagem para " . Carros::espacoNaGaragem() . " carro(s)\n";
    $carro1 = new Carros (Marcas::Hyundai, 'HB20', 'Vermelho', 2020);
} else {
    echo "Garagem cheia!\n";
    return;
}

echo $carro1->marca->name;//output: Hyundai
echo "\nNumero da marca na garagem".$carro1->marca->value; // Saída: 4

echo "\n".$carro1->marca->getNomeCompleto(); //output: Hyundai Automóveis