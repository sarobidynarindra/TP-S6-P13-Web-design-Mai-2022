<?php
    session_start();
    include("connexion.php");
    
    if(isset($_POST['modifier']))
    {
        $description=$_POST['description'];
		$idDetailsActu=$_POST['idDetailsActu'];
	    
	  
		$sql2="UPDATE DetailsActu SET description='%s' WHERE idDetailsActu='%s'";
		$sql=sprintf($sql2,$description,$idDetailsActu);
		echo $sql;
		$farany=mysqli_query($bdd,$sql);

		header('Location:ListesContenus.php');
	}
?>