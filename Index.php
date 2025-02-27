<?php

require 'Class/Marcas.php'; //import the enum first
require 'Class/Carros.php';

$carro = new Carros (Marcas::Hyundai, 'HB20', 'Vermelho', 2020);

echo $carro->getMarca()->name; //output: Hyundai