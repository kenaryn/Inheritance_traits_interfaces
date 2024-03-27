<?php

declare(strict_types=1);

namespace App\Entity;

interface PrintableInterface
{
  public function print(): string;
}
