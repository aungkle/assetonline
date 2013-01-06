<?php
  $con = mysql_connect("localhost", "root", "1234");
  $db = mysql_select_db("assetonline", $con);
  mysql_query("SET NAMES UTF8");
  if (!$conn) {
    echo "connection error";
  }
?>
