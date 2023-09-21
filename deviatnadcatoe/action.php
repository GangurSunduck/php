<?php
if(empty($_POST))
exit();
$name=$_POST["name"];
$otdel=$_POST["otdel"];
$data=$_POST["data"];
$slogh=$_POST["slogh"];
$opisanie=$_POST["opisanie"];
include 'db.php';

$query = "INSERT INTO `zagruz` (`name`, `otdel`, `data`, `slogh`, `opisanie`) VALUES ('$name', '$otdel', '$data', '$slogh', '$opisanie')";
$link->query($query) or die($link->error);
$link->close();
header("Location: vivod.php");
?>