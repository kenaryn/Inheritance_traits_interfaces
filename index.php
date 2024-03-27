<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

// use \App\Entity\Cat;
use \App\Entity\Cow;
use \App\Entity\Dog;
use \App\Entity\Chicken;
use \App\Entity\Book;
use \App\Entity\Box;

$fiji = new Dog('Fiji');
echo $fiji->hunt(), PHP_EOL;

$charlotte = new Cow('Charlotte');
echo $charlotte->calve(), PHP_EOL;

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

$books = new ArrayObject();
$books->append($war_and_peace);
$books->append($le_petit_prince);
$books->append($hara);

foreach ($books as $book) {
  echo $book->print(), PHP_EOL;
}

$box = new Box;
$box->add($war_and_peace);
$box->add($fiji);
$box->add($pacotille);
$box->add($le_petit_prince);
