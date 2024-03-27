<?php declare(strict_types=1);

namespace \App\Entity\Herbivorous;

interface HerbivorousInterface
{
  public function crop(): string
  {
    return 'The ' . (new \ReflectionClass($this)->getShortName()) . ' ' . $this->Animal->name . ' is croping some grass in the meadow.';
  }
}
