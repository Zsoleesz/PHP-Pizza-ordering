<?php

class Rendeles
{
  public $id;
  public $pizza;
  public $datum;
  public $meret;

  public function __construct($id, $pizza, $datum, $meret)
  {
    $this->id = $id;
    $this->pizza = $pizza;
    $this->datum = $datum;
    $this->meret = $meret;
  }
}