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

$rendelesek = Adatbazis::osszesRendeles();

?>

<body class="container">
  <h1>Rendelesek</h1>

  <table class="table table-sm">
    <thead>
      <th>
        Sorszam
      </th>
      <th>
        Pizza
      </th>
      <th>
        Meret
      </th>
      <th>
        Ido
      </th>
    </thead>

    <tbody>
      <?php foreach ($rendelesek as $rendeles) : ?>
      <tr>
        <td><?= $rendeles->id ?></td>
        <td><?= $rendeles->pizza ?></td>
        <td><?= $rendeles->meret ?> cm</td>
        <td><?= $rendeles->datum ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>