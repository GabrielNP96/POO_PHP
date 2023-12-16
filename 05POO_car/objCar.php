<?php

require 'classCar.php';

echo "Vamos documentar o carro." . PHP_EOL;
$carModel = readline('Digite o modelo do carro: ');
$carLicensePlate= readline('Digite a placa: ');
$carManufacturer = readline('Digite o fabricante: ');
$carYear = readline('Digite o ano: ');
$carTypeOfFuel = readline("Digite o tipo de combsutivel: ");
$carColor = readline('Digite a cor do carro: ');
echo 'Salvando...' . PHP_EOL;

$uno = new Car($carModel, $carLicensePlate, $carManufacturer, $carYear, $carTypeOfFuel, $carColor);
$uno -> getData();