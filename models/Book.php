<?php

declare(strict_types=1);

namespace App\Entity;

class Book implements PrintableInterface
{
  public function __construct(private string $title, private int $releaseDate, private string $isbn, private string $resume)
  {
    $this->title = $title;
    $this->releaseDate = $releaseDate;
    $this->isbn = $isbn;
    $this->resume = $resume;
  }

  public function __get(string $property): string
  {
    if (property_exists($this, $property)) {
      return $this->property;
    } else {
      throw new \Exception("'$property' property exists not!");
    }
  }

  public function print(): string
  {
    return "Title: $this->title\nRelease date: $this->releaseDate\nISBN: $this->isbn\nResume: $this->resume\n";
  }
}
