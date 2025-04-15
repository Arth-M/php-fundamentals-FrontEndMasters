<?php include "header_inc.php" ?>
      <?php
      include "classes.php";
      $db = new DB();
      $exhibits = $db->execute("SELECT * FROM Exhibits");
      echo var_dump($exhibits);

      echo "<ul>";
      foreach ($exhibits as $object):
      ?>

      <li></li>

      <?php endforeach; ?>
      </ul>
<?php include "footer_inc.php" ?>
