<?php 
require('connexion.php');

     $Email= $_POST['Email'];
     $password=$_POST['motdepasse'];
     $mdp=sha1($password);
     $sql="SELECT*FROM Admin WHERE email='%s' AND motdepasse='%s'";
     $sql=sprintf($sql,$Email,$mdp); 
    $resultat=mysqli_query($bdd,$sql);
    $val=mysqli_fetch_assoc($resultat);

    if($Email==$val['email'] && $mdp==$val['motdepasse'])
    {
        header('Location:AccueilAdmin.php');
    }
    else
    {
       header('Location:LoginAdmin.php');
    }
?>