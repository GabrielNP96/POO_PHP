<?php

//o objetivo é criar uma carro com poo.

class Car 
{
    private string $carModel;
    private string $carLicensePlate;
    private string $carManufacturer;
    private string $carYear;
    private string $carTypeOfFuel;
    private string $carColor;

    function __construct(string $carModel, string $carLicensePlate, string $carManufacturer,string $carYear, string $carTypeOfFuel, string $carColor){

        $this -> carModel = $carModel;
        $this -> carLicensePlate = $carLicensePlate;
        $this -> carManufacturer = $carManufacturer;
        $this -> carYear = $carYear;
        $this -> carTypeOfFuel = $carTypeOfFuel;
        $this -> carColor = $carColor;
    }

    function getData(){
        echo "Modelo do carro: {$this->carModel}" . PHP_EOL;
        echo "Placa do carro: {$this->carLicensePlate}" . PHP_EOL;
        echo "Fabricante: {$this->carManufacturer}" . PHP_EOL;
        echo "Ano do carro: {$this->carYear}" . PHP_EOL;
        echo "Tipo do combustivel: {$this->carTypeOfFuel}" . PHP_EOL;
        echo "Cor do Carro: {$this->carColor}" . PHP_EOL;
    }

}
