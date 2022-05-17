<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contenus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu" style="margin-left:300px">
								<li>
									<a href="AccueilAdmin.php">Accueil</a>
								</li>

								<li>
									<a href="ListesContenus.php">Listes Contenus</a>
								</li>

                                <li>
									<a href="index.php">Deconnexion</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/img5.jpg);">
		<h2 class="tit6 t-center">
			Rechauffement Climatique
		</h2>
	</section>
    
    <center><h1 class="txt33 p-b-14" style="margin-top:50px;font-size: bold">Ajout Contenu</h1></center>
		<center>
			<form class="leave-comment p-t-10" method="POST" action="TraitementAjoutContenu.php">
                             <h6 style="font-size: bold;margin-top:10px">Titre Actualite :</h6>
                           
                           <?php 
                                include('connexion.php');
                                 $sql2 = "select*from Actu";
                                $result = mysqli_query($bdd, $sql2);
                             ?> 
							<div class="size30 bo2 bo-rad-10 m-t-3 m-b-20" style="margin-top:17px">
								
							<select class="bo-rad-10 sizefull txt10 p-l-20" name="Titre">
								<?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            	<option value="<?php echo($row['idActu']);?>"><?php echo($row['titre']);?></option>
                            		<?php } ?>
                           </select>
						
							</div>

							<h6 style="font-size: bold;margin-top:10px">Description :</h6>
	<textarea class="bo-rad-10 sizefull txt10 p-l-20 " style="width:270px;height:120px;margin-top: 17px" name="description" placeholder="Description"></textarea> 
							
                           
                            
                            
							<div class="from-control" style="margin-left: 640px;margin-top: 10px"> 
								
							</div>
						 

							<button type="submit" class="btn btn-info" style="margin-top:30px;width:200px" name="ajouter">Ajouter</button>
			</form>
 
		</center>

    <center><h1 class="txt33 p-b-14" style="margin-top:90px;font-size: bold;margin-left: ">Listes Contenus</h1></center>
    <?php 
       include('connexion.php');
       $sql2 = "select*from DetailsActu d join Actu a on d.idActu=a.idActu";
       $result = mysqli_query($bdd, $sql2);
    ?>
	<div class="container" style="margin-top: 30px">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">

								<a href="blog-detail.html">
									<img src="images/<?php echo($row['image']);?>" alt="IMG-BLOG" width="200px" height="380px">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt31">
										<?php echo($row['dateActualite']);?>
									</span>
									
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<?php echo($row['titre']);?>
								</h4>

								<p>
									<?php echo($row['description']);?>
								</p>

								 <a href="PageModificationContenu.php?id=<?php echo($row['idDetailsActu']);?>">
								<button type="button" class="btn btn-info" style="margin-top:20px">MODIFIER</button>
							</a> 

							<a href="SuppressionContenu.php?idActu=<?php echo($row['idActu']);?>&&idCont=<?php echo($row['idDetailsActu']);?>" class="txt4">
								<button type="button" class="btn btn-danger" style="margin-top: 20px">SUPPRIMER</button>
							</a>
							</div>
						</div>
						 <?php } ?>
				</div>
			</div>
			
		
	
	</div>
</body>
<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Rechauffement Climatique
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i aria-hidden="true"></i>
							 - l’un des plus grands défis à relever pour les sociétés humaines dans les prochaines décennies.
						</li>

						<li class="txt14 m-b-14">
							<i aria-hidden="true"></i>
							- La biodiversité, l’agriculture et même l’ensemble de notre système économique sont menacés par la crise climatique
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contact@site.com
						</li>
					</ul>

					<!-- - -->
					
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
				
					<h4 class="txt13 m-b-33">
						Site
					</h4>

					<div class="m-b-25">
						<p class="txt14 m-b-18">
							Informations sur le rechauffement climatique (Articles)
							
						</p>

					</div>

					<div>
						<p class="txt14 m-b-18">
							Contenus
							
						</p>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallerie
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/img8.jpg" data-lightbox="gallery-footer">
							<img src="images/img8.jpg" alt="GALLERY" width="100px" height="50px">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/Mada.jpg" data-lightbox="gallery-footer">
							<img src="images/Mada.jpg" alt="GALLERY" width="100px" height="50px">
						</a>


						

						<a class="item-gallery-footer wrap-pic-w" href="images/foot2.jpg" data-lightbox="gallery-footer">
							<img src="images/foot2.jpg" alt="GALLERY" width="100px" height="50px">
						</a>

						

						<a class="item-gallery-footer wrap-pic-w" href="images/foot6.jpg" data-lightbox="gallery-footer">
							<img src="images/foot6.jpg" alt="GALLERY" width="100px" height="50px">
						</a>

						
					</div>

				</div>
			</div>
		</div>

	</footer>
</html>
