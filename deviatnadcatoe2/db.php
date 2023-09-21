<?php
$dbhost = "localhost";
$dbname = "deviatnadcatoetwo";
$dbuser = "root";
$dbpassword = "";
$link = new mysqli($dbhost,$dbuser,$dbpassword, $dbname);
if($link->connect_errno){
    echo "Error pri podcluchenii k BD: $link->connect_error";
}
?>