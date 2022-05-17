<?php
session_start();
include('connexion.php');
if(isset($_POST['Ajouter']))
{
	$nomPays=$_POST['nomPays'];
	$titre=$_POST['titre'];
	$Date=$_POST['Date'];
	$image=$_POST['image'];
	$sql=mysqli_query($bdd,"INSERT INTO Actu(nomPays,titre,dateActualite,image) VALUES('".$nomPays."','".$titre."','".$Date."','".$image."')");
	
	header('Location:AccueilAdmin.php');
}
?>