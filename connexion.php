<?php

$databaseHost='localhost';
$databaseName='genie';
$databaseUsername='root';
$databasepassword='';
$mysqli=mysqli_connect($databaseHost,$databaseUsername,$databasepassword,$databaseName);
//function connexionBD($dbname){

//	$sgbname='mysql';
//	$host='localhost';
//	$charset='utf8';
//	$dsn=$sgbname . ':$host . ';dbname='.$dbname.';charset='.$charset';
	//$username='root';
	//$password='';
	//$erreur=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	//try
	//{

		//$bdd=new PDO($dsn,$username,$password,$erreur);
		//echo '<p> Connexion reussie</p>';
		//return $bdd;
	//} catch(PDOException $e){

		//echo 'Connexion échouée:' .$e->getMessage();
		//return null;

	//}
//}

?>