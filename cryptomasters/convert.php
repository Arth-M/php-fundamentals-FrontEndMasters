<?php
// include "classes/converter.php"; //is mostly like a copy and paste ;
// include_once "./classes/converter.php"; // will avoid to include twice a file, in case many include are used that
// are cascading, performance is lesser than include as it needs to check if a file as already been included
// require "./classes/converter.php"; //will trigger an error/runtime exception if the file is not imported
require_once "classes.php"; //same as include_once but throwing an error if the file cannot be loaded
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Conversion</h1>

  <?php



  //Superglobal variables
  // $amount = $_GET["money_amount"];
  // $crypto = $_GET["cryptocurrency"];
  if (isset($_POST["money_amount"]) && isset($_POST["cryptocurrency"])) {
  $amount = $_POST["money_amount"];
  $crypto = $_POST["cryptocurrency"];

  $converter = new CryptoConverter($crypto);
  $result = $converter->convert($amount);
    echo ("<p>You want to convert $amount $crypto </p>");
    echo "<h2>You have USD $result </h2>";

  } else {
    echo "<p>You should define a crypto and an amount to convert <a href='/index.php'>here</a></p>";
  }
  ?>
</body>
</html>
