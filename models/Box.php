<?php

declare(strict_types=1);

namespace App\Entity;

class Box
{
  public function __construct(private \ArrayObject $list = new \ArrayObject())
  {
    $this->list = $list;
  }

  public function add(PrintableInterface $element): void
  {
    if (!($element instanceof PrintableInterface)) {
      echo ("You are trying to an element which implements not Printable!"), PHP_EOL;
    }
    $this->list->append($element);
  }

  public function count(): int
  {
    return count($this->list);
  }

  public function list(): ArrayObject
  {
    if ($this->count($this->list) !== 0) {
      return $this->list;
    } else {
      echo "This list is empty!", PHP_EOL;
    }
  }
}
