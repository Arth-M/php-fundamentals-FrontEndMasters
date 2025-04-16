<?php include "header_inc.php" ?>
  <?php

  // Request all errors to be reported:
  ini_set("display_errors", 1); //ini is the configuration file so you can set config from here
  ini_set("display_errors", 1);
  error_reporting(E_ALL);


  include "classes.php";
  $db = new DB();

  try {
    $exhibits = $db->execute("SELECT * FROM Exhibits");
    $index = $_GET["index"] ?? 0;
    if ($index >= 0 && $index < count($exhibits)) {
    $exhibit = $exhibits[$index];
    } else {
      header("Location: /index.php"); //redirection vers la page index
      // ou redirection vers une page d'erreur 404
      exit(); // die();
    }
  } catch (Exception $e) {
    echo "<h4>ERROR</h4>";
  }
  ?>
  <article>
    <?= //shortcut for <?php echo
      // echo $exhibit["title"]
      "<h2>".$exhibit["title"]."</h2>" ?>
      <p><?= $exhibit["description"] ?> </p>
      <img src="/gallery/<?= $exhibit["image"]?>"
      fetchpriority='high' decoding='sync'>
    <!-- <img src=\"gallery/".$exhibit["image"]." fetchpriority=\"high\" decoding=\"sync\">" -->
  </article>

  <a href="index.php" style="text-decoration:none;color:white;size:16px;">Back to main page</a>

<?php include "footer_inc.php" ?>
