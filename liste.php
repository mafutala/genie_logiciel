<?php
include_once("connexion.php");
$result=mysqli_query($mysqli,"select * from utilisateurs order by id desc");
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">

<head>
	<meta charset="utf-8">
	<title>Affichage</title>
</head>
<body>
<a href="index.html">Inscription</a>
<table width="80%" >
<tr bgcolor="#13455c">
	<td>Identifiant</td>
	<td>Username</td>
	<td>E-mail</td>
	<td>Password</td>
	<td>Mise à jour</td>
</tr>
	<?php
	while ($res=mysqli_fetch_array($result)) {
	# code...
	echo "<tr>";
	echo "<td>".$res['id']."</td>";
	echo "<td>".$res['username']."</td>";
	echo "<td>".$res['mail']."</td>";
	echo "<td>".$res['password']."</td>";
	echo "<td><a href=\"modifier.php?id=$res[id]\">Modifier</a>│<a href=\"supprimer.php?id=$res[id]\" onClick=\"return confirm('voulez-vous vraiment supprimé cet utilisateur?')\">Supprimer</a></td>";
}

?>
</table>
</body>
</html>