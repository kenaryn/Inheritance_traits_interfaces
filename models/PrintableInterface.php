<?php

declare(strict_types=1);

namespace App\Entity;

interface Printable
{
  public function print(): string;
}
