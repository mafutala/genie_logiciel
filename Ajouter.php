<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajout</title>
</head>
<body>
	<?php  
	include_once("connexion.php");
	if (isset($_POST['submit'])) {
		# code...
		$username=$_POST['name'];
		$mail=$_POST['email'];
		$password=$_POST['Password'];
		$result=mysqli_query($mysqli,"insert into utilisateurs(username,mail,password) values ('$username','$mail','$password')");
	//	echo '<p>$username inscription effectée avec succès!</p>';
		{echo "<h3>$username est inscrit(e)</h3>";
		echo "<br/><a href='liste.php'> Afficher la liste</a>";}
	}
	else
	{
		echo "echec d'inscription";


	}






	?>

</body>
</html>