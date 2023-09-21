<?php
if(empty($_POST))
exit();
$litco=$_POST["litco"];
$address=$_POST["address"];
$telephon=$_POST["telephon"];
$mail=$_POST["mail"];
$data=$_POST["data"];
$oplata=$_POST["oplata"];
$parametr=$_POST["parametr"];
$pojelai=$_POST["pojelai"];
include 'db.php';

$query = "INSERT INTO `zagruzka` (`litco`, `address`, `telephon`, `mail`, `data`, `oplata`, `parametr`, `pojelai`) VALUES ('$litco', '$address', '$telephon', '$mail', '$data', '$oplata', '$parametr', '$pojelai')";
$link->query($query) or die($link->error);
$link->close();
header("Location: index.php");
?>