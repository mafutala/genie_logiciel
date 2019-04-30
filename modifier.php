<?php
include_once("connexion.php");
if (isset($_POST['update'])) {
	# code...
	$id=$_POST['id'];
	$username=$_POST['name'];
	$mail=$_POST['email'];
	$password=$_POST['Password'];

	$result=mysqli_query($mysqli,"update utilisateurs set username='$username',mail='$mail',password='$password' where id=$id");
	header("Location:index.html");
}
?>
<?php

$id=$_GET['id'];
$result=mysqli_query($mysqli,"select * from utilisateurs where id=$id");
while ($res=mysqli_fetch_array($result)) {
	# code...
	$username=$res['username'];
	$mail=$res['mail'];
	$password=$res['password'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Modification</title>
</head>
<body>
	<a href="index.html">Accueil</a>
<form name="form1" method="post" action="modifier.php">
	<legend>Modifications</legend>
<fieldset>
	<table width="25%">
		<tr>
			<td></td>
			<td><input type="text" name="name" placeholder="username" required="" value="<?php echo $username;?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="email" name="email" size="20" maxlength="60" value="<?php echo $mail;?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Password" name="Password" placeholder="Mot de passe" required=""value="<?php echo $password;?>"></td>
		</tr>
		<td><input type="hidden" name="id" value="<?php echo $_GET ['id'];?>"></td>
				
	</table>
</fieldset>
	<p>
	<input type="submit" name="update" value="Modification"/>
	</p>
</form>
</body>
</html>