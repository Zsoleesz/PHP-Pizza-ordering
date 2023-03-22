<?php

class Pizza
{
  public $id;
  public $nev;
  public $ar;

  public function __construct($id, $nev, $ar)
  {
    $this->id = $id;
    $this->nev = $nev;
    $this->ar = $ar;
  }
}