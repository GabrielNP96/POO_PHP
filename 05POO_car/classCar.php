<?php

//o objetivo é criar uma carro com poo.

class Car 
{
    private string $carModel;
    private string $carLicensePlate;
    private string $carManufacturer;
    private string $carTypeOfFuel;

    function data(){
        echo "Modelo do carro: {$this->carModel}" . PHP_EOL;
        echo "Modelo do carro: {$this->carLicensePlate}" . PHP_EOL;
        echo "Modelo do carro: {$this->carManufacturer}" . PHP_EOL;
        echo "Modelo do carro: {$this->carTypeOfFuel}" . PHP_EOL;
    }

}
