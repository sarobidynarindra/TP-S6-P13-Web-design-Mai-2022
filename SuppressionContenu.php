<?php
	session_start();
	require ('connexion.php');
		$idActu=$_GET['idActu'];
		$idDetails=$_GET['idCont'];

        $sql="DELETE FROM DetailsActu WHERE idDetailsActu='%s'";
        $sql=sprintf($sql,$idDetails);
        $farany=mysqli_query($bdd,$sql);

		$req="DELETE FROM Actu WHERE idActu='%s'";
		$req=sprintf($req,$idActu);
		$fa=mysqli_query($bdd,$req);
        
		header('Location:ListesContenus.php');
?>