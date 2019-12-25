<?php
class db {
  public static $link;
}

db::$link = new mysqli($_db_host, $_db_user, $_db_pw, $_db_name);

?>
