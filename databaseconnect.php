<?php
  $con = mysql_connect("localhost", "root", "1234");
  if (!$con) {
    die("connection error");
  }else{
    $db = mysql_select_db("assetonline", $con);
    mysql_query("SET NAMES UTF8");
    if(!$db){
      die("connection error");
    }
  }
?>
