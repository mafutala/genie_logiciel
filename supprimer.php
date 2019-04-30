<?php

include_once("connexion.php");
$id=$_GET['id'];
$result=mysqli_query($mysqli,"delete from utilisateurs where id=$id");
header("Location:index.html");
?>