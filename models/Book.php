<?php declare(strict_types=1);

namespace App\Entity;

class Book implements Printable;
{
  public function __construct(private string $title, private int releaseDate, private string isbn, private string resume)
  {
    $this->title = $title;
    $this->releaseDate = $releaseDate;
    $this->isbn = $isbn;
    $this->resume = $resume;
  }

  public function __get(string $title): string
  {
    return $this->title;
  }

  public function __get(int $releaseDate): int
  {
    return $this->releaseDate;
  }

  public function __get(string $isbn): string
  {
    return $this->isbn;
  }

  public function __get(string $resume): string
  {
    return $this->resume;
  }
}
