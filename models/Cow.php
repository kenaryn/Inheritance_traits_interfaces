<?php

declare(strict_types=1);

namespace App\Entity;

use HerbivorousInterface;

class Cow implements HerbivorousInterface
{
  public function crop(): string
  {
  }
}
