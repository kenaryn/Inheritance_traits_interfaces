<?php

declare(strict_types=1);

namespace App\Entity;

abstract class Animal
{
  public function __construct(readonly protected string $name)
  {
    $this->name = $name;
  }

  public function __get($name): string
  {
    return $this->name;
  }
}
