<?php
session_start();

mysql_connect ("localhost","jexa","12345");
mysql_select_db ("reg");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>