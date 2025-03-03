<?php

require 'Class/Marcas.php'; //import the enum first
require 'Models/Automoveis.php';
require 'Class/Carros.php';
require 'Class/Motos.php';

if (Carros::verificarEspaco()) {
    echo "Ainda há espaço na garagem para " . Carros::espacoNaGaragem() . " veiculos(s)\n";
    $carro1 = new Carros (Marcas::Hyundai, 'HB20', 'Vermelho', 2020);
} else {
    echo "Garagem cheia!\n";
    return;
}

echo $carro1->marca->name;//output: Hyundai
echo "\nNumero da marca na garagem \n".$carro1->marca->value; // Saída: 4

echo "\n".$carro1->marca->getNomeCompleto(); //output: Hyundai Automóveis

if (Motos::verificarEspaco()) {
    echo "Ainda há espaço na garagem para " . Motos::espacoNaGaragem() . " veiculos(s)\n";
    $moto1 = new Motos (Marcas::Honda, 'Corrida', 'Azul', 2025);
} else {
    echo "Garagem cheia!\n";
    return;
}

echo $moto1->marca->name;//output: Honda
echo "\nNumero da moto na garagem \n".$moto1->marca->value; // Saída: 5

echo "\n".$moto1->marca->getNomeCompleto(); //output: Honda Motos

if (Carros::verificarEspaco()) {
    echo "Ainda há espaço na garagem para " . Carros::espacoNaGaragem() . " veiculos(s)\n";
    $carro2 = new Carros (Marcas::Fiat, 'Argo', 'Cinza', 2023);
} else {
    echo "Garagem cheia!\n";
    return;
}

echo $carro2->marca->name;//output: Argo
echo "\nNumero da marca na garagem \n".$carro2->marca->value; // Saída: 3

echo "\n".$carro2->marca->getNomeCompleto(); //output: Fiat Automóveis