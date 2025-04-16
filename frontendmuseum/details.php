<?php include "header_inc.php" ?>
  <?php
  include "classes.php";
  $db = new DB();
  $exhibits = $db->execute("SELECT * FROM Exhibits");

  $exhibit = $exhibits[$_GET["index"] ?? 0];
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
