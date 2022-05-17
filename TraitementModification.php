<?php
    session_start();
    include("connexion.php");
    
    if(isset($_POST['modifier']))
    {
        $idActu=$_POST['idActu'];
		$nomPays=$_POST['nomPays'];
	    $titre=$_POST['titre'];
	    $Date=$_POST['Date'];
	    $image=$_POST['image'];
	  
		$sql2="UPDATE Actu SET nomPays='%s',titre='%s',dateActualite='%s',image='%s' WHERE idActu='%s'";
		$sql=sprintf($sql2,$nomPays,$titre,$Date,$image,$idActu);
		echo $sql;
		$farany=mysqli_query($bdd,$sql);

		header('Location:AccueilAdmin.php');
	}
?>