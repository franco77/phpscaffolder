<?php
  session_start();
  DEFINE('HOST', 'localhost');
  DEFINE('USER', 'bill');
  DEFINE('PSWD', 'bill098');
  mysql_connect(HOST, USER, PSWD) or die('Error: ' . mysql_error());
  mysql_select_db('model_db') or die('Error: ' . mysql_error());
?>