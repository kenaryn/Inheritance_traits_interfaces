<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

use \App\Entity\Animal;
use \App\Entity\Dog;
use \App\Entity\Cat;

$fiji = new Dog('Fiji');
echo $fiji, PHP_EOL;

