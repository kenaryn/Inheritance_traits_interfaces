<?php

declare(strict_types=1);

namespace App\Entity;

class Cow extends Animal implements HerbivorousInterface, MammiferInterface
{
  public function crop(): string
  {
    $croping = 'The ' . (new \ReflectionClass($this))->getShortName() . ' ' . $this->name . ' is croping some fresh '
      . ' grass in the glade at the forest\' entry';
    return $croping;
  }

  public function calve(): string
  {
    $calving = 'The ' . (new \ReflectionClass($this))->getShortName() . ' ' . $this->name . ' is calving some newborns'
      . ' in sheltered locations from predators.';
    return $calving;
  }
}
