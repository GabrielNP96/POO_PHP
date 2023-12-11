<?php

class Dog 
{
    public string $name;
    public int $ageInYears;
    public string $race;

    public function data() {
        echo "Nome: {$this->name}\nIdade: {$this->ageInYears} anos\nRaça: {$this->race}" . PHP_EOL;
    }
}



