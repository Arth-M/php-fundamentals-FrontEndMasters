<?php
// You can create abstract classes : classes that cannot be instantiated
// but can be used by making subclasses inheriting from them,
// eg: abstract class DB { blabla }

//to use db in php you can use custom providers that created libraries to
//take care of most DBs (postgre, sqlite, mongodb etc...) ; or PDO : php data objects : an abstraction that helps you
// to connect to all types of databases.
class DB {
  function execute($query) {
    $db = new SQLite3('./data/data.db'); //here we use custom provider to directly use SQLite3
    // as this class is used in index.php, the entrypoint is at the level of index.php !!!
    $result = $db->query($query);

    if ($result) {
      $all = $result->fetchArray(SQLITE3_ASSOC);
      return $all;
    } else {
      return 0;
    }
  }

}
?>
