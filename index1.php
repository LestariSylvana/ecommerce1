<?php
//koneksi database
$koneksi = new mysqli("localhost","root","","tokoku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Butik Muslimah</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<!--================Header Menu Area =================-->

	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Hubungi Kami: 021 555 5698 </p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="login.html">
								Login/Daftar
							</a>
						</li>
						<li>
							<a href="contact.html">
								Hubungi Kami
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
					 <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Home</a>
									</li>
										<li class="nav-item submenu dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Belanja</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category.html">Kategori</a>
												<li class="nav-item">
													<a class="nav-link" href="single-product.html">Detail Produk</a>
										</ul>
									</li>
										
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Kontak</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<img class="img-fluid" src="foto_produk/logo1.png" alt="">
						<a class="white_bg_btn" href="#">Koleksi</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->
			
					


<!-- konten -->
<section class="konten">
	<div class="container">


		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()){ ?>


			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5><?php echo number_format($perproduk['harga_produk']); ?></h5>
					<a href="" class="btn btn-primary">Beli</a>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>

</div>

	</section>

			


</section>

</body>
</html>