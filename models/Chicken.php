<?php

declare(strict_types=1);

namespace App\Entity;

class Chicken extends Animal implements OviparousInterface
{
  public function brood(): string
  {
    $brood = 'The ' . (new \ReflectionClass($this))->getShortName() . ' ' . $this->name . ' is brooding on an egg in'
      . ' the back of the hen.';
    return $brood;
  }
}
