<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

// use \App\Entity\Animal;
// use \App\Entity\Cat;
// use \App\Entity\Cow;
use \App\Entity\Dog;
use \App\Entity\Chicken;

$fiji = new Dog('Fiji');
echo $fiji->hunt(), PHP_EOL;

$pacotille = new Chicken('Pacotille');
echo $pacotille->brood(), PHP_EOL;

$rantanplan = new Dog('rantanplan');
$dogs = new ArrayObject();
$dogs->append($fiji);
$dogs->append($rantanplan);

foreach ($dogs as $dog) {
  echo $dog->hunt(), PHP_EOL;
}

$war_and_peace = new Book('War and peace', 1991, '10-23-19994-A', 'Must read!');
$le_petit_prince = new Book('Le petit prince', 1961, '14-63-65494-B', 'Cruel adventure');
$hara = new Book('Hara', 1967, '69-5123-19994-FD', 'Spirituality book');
