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


    echo ("<p>You want to convert $amount $crypto </p>");

  } else {
    echo "<p>You should define a crypto and an amount to convert <a href='/index.php'>here</a></p>";
  }
  ?>
</body>
</html>
