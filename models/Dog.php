<?php

declare(strict_types=1);

namespace App\Entity;

class Dog implements PredatorInterface
{
  public function hunt(): string
  {
    return 'The ' . (new \ReflectionClass($this))->getShortName() . ' ' . $this->name . ' is hunting some mouses in the barn.';
  }

  public function __toString(): string
  {
    return json_encode($this);
  }
}
