<?php 
    $idActu=$_GET['id'];  
    include('connexion.php');
    $sql2 = "select*from DetailsActu d join Actu a on d.idActu=a.idActu WHERE d.idActu='$idActu'";
    $result = mysqli_query($bdd, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- <meta charset="UTF-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
     <?php $row = mysqli_fetch_assoc($result); ?>
	<title><?php echo($row['titre']);?></title>
<!--===============================================================================================-->
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
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">Accueil</a>
								</li>

								<li>
									<a href="LoginAdmin.php">Connexion Admin</a>
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

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.html" class="txt19">Acceuil</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.html" class="txt19">Connexion Admin</a>
			</li>
		</ul>

		<!-- - -->
		
	</aside>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/img4.jpeg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<!-- <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span> -->

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Le R??chauffement Climatique
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Contenus
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/img5.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Le R??chauffement Climatique
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
							    Contenus
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/img7.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							 Le R??chauffement Climatique
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Contenus
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	
		<div class="container" style="margin-top: 30px">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<!-- <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md"> -->
						<!-- Block4 -->
                        
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

								
							</div>
						</div>
						 
				</div>
			</div>
			
		
	
	</div>
<!-- Footer -->
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
							 - l???un des plus grands d??fis ?? relever pour les soci??t??s humaines dans les prochaines d??cennies.
						</li>

						<li class="txt14 m-b-14">
							<i aria-hidden="true"></i>
							- La biodiversit??, l???agriculture et m??me l???ensemble de notre syst??me ??conomique sont menac??s par la crise climatique
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

	
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>