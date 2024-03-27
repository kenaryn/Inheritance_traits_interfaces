<?php

declare(strict_types=1);

namespace App\Entity;

interface PredatorInterface
{
  public function hunt(): string;
}
