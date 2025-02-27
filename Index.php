<?php

require 'Class/Carros.php';

$carro = new Carros ('Fiat', 'Arco', 'Vermelho', 2020);

echo $carro->getMarca();