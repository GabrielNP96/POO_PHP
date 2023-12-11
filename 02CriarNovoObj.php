<?php

require '01CriarClasse.php';

$newDog = new Dog();
$newDog -> name = 'Lord';
$newDog -> ageInYears = 4;
$newDog -> race = 'vira-latas';
$newDog -> data();
