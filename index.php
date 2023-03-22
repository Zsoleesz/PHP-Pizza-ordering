<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Webshop</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <!-- BootStrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<?php

require_once("db/db.php");

Adatbazis::csatlakoz();

$pizzak = Adatbazis::osszesPizza();

if (isset($_POST["rendeles"])) {
  Adatbazis::ujRendeles($_POST["pizza"], $_POST["meret"]);
}


?>

<body class="container">
  <h1>Pizza</h1>

  <div class="row">
    <div class="col-md-6"><img class="img-thumbnail" src="img/pizza.jpg" alt=""></div>
    <div class="col-md-6">
      <form action="" method="post">
        <label for="pizza">Pizza</label>
        <select class="form-select" name="pizza" id="pizza">
          <?php foreach ($pizzak as $pizza) : ?>
          <option value="<?= $pizza->nev ?>">
            <?= "$pizza->nev - $pizza->ar Ft" ?>
          </option>
          <?php endforeach ?>
          </option>
        </select>
        <label for="meret">Meret</label>
        <select class="form-select mb-4" name="meret" id="meret">
          <option value="30">30 cm</option>
          <option value="40">40 cm</option>
          <option value="50">50 cm</option>
        </select>
        <input class="btn btn-primary" type="submit" name="rendeles" id="" value="Rendeles">
      </form>
    </div>
  </div>

</body>

</html>
