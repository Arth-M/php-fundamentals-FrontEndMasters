<?php include "header_inc.php" ?>
      <?php
      include "classes.php";
      $db = new DB();
      $exhibits = $db->execute("SELECT * FROM Exhibits");
      // echo var_dump($exhibits);

      echo "<ul id='master'>";
      foreach ($exhibits as $i=>$object):
      ?>

      <li><a href="details.php?index=<?= $i ?>"><?php echo $object["title"] ?></a></li>

      <?php endforeach; ?>
      </ul>
<?php include "footer_inc.php" ?>
