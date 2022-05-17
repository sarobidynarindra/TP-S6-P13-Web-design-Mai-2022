<?php
session_start();
include('connexion.php');
if(isset($_POST['ajouter']))
{
	$idActu=$_POST['Titre'];
	$description=$_POST['description'];
	$sql=mysqli_query($bdd,"INSERT INTO DetailsActu(idActu,description) VALUES('".$idActu."','".$description."')");
	
	header('Location:ListesContenus.php');
}
?>