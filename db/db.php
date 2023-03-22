<?php

require_once("model/pizza.php");
require_once("model/rendeles.php");

class Adatbazis
{

  private static $kapcsolat;

  public static function csatlakoz()
  {
    $db_host = "localhost";
    $db_username = "";
    $db_password = "";
    $db_database = "";

    self::$kapcsolat = mysqli_connect(
      $db_host,
      $db_username,
      $db_password,
      $db_database,
    );
  }

  public static function osszesPizza()
  {
    $sql = "SELECT * FROM `pizza`";

    $eredmeny = mysqli_query(self::$kapcsolat, $sql);

    $pizzak = [];

    if (mysqli_num_rows($eredmeny) > 0) {
      while ($sor = mysqli_fetch_assoc($eredmeny)) {
        $pizzak[] = new Pizza(
          $sor["id"],
          $sor["nev"],
          $sor["ar"],
        );
      }
    }

    return $pizzak;
  }

  public static function osszesRendeles()
  {
    $sql = "SELECT * FROM `rendeles` ORDER BY `datum` DESC;";

    $eredmeny = mysqli_query(self::$kapcsolat, $sql);

    $rendelesek = [];

    if (mysqli_num_rows($eredmeny) > 0) {
      while ($sor = mysqli_fetch_assoc($eredmeny)) {
        $rendelesek[] = new Rendeles(
          $sor["id"],
          $sor["pizza"],
          $sor["datum"],
          $sor["meret"],
        );
      }
    }

    return $rendelesek;
  }

  public static function ujRendeles($pizza, $meret)
  {
    $sql = "INSERT INTO `rendeles` (`pizza`, `meret`) VALUES ('$pizza', $meret); ";

    $eredmeny = mysqli_query(self::$kapcsolat, $sql);

    return $eredmeny;
  }
}
