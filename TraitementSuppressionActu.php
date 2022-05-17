<?php
	session_start();
	require ('connexion.php');
		$idActu=$_GET['id'];

		$req="DELETE FROM Actu WHERE idActu='%s'";
		$req=sprintf($req,$idActu);
		$farany=mysqli_query($bdd,$req);
		header('Location:AccueilAdmin.php');
?>