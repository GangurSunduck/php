<?php
if(empty($_POST))
exit();
$name=$_POST["fio"];
$login=$_POST["login"];
$password=md5($_POST["password"]);
include 'db.php';

$query = "INSERT INTO `usersi` (`name`, `login`, `password`) VALUES ('testik', 'testo', '123');  ";
$link->query($query) or die($link->error);
$link->close();
header("Location: registr.php");
?>