<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="frontend/styles/main.css">



  <title>E-TIKET</title>

</head>
<body id="page-top">
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img src="frontend/img/planelogo.png" width="70" height="70" alt="logo">
			E-TIKET</a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
		  		</li>
				<li class="nav-item">
					<a class="nav-link" href="tentang.php">Daftar Pesawat</a>
				</li>
			    <li class="nav-item">
					<a class="nav-link" href="ly_beli.php">Beli</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../admin/logout.php">Logout</a>
				</li>
			</ul>
		  </div>
		</div>
	  </nav>


	<!--Bagian Header-->
	<header class="masthead">
		<div class="container">
		  <div class="intro-text">
			<div class="intro-lead-in">Penjualan Tiket Pesawat</div>
			<div class="intro-heading text-uppercase">E-TIKET</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="ly_beli.php">Beli Sekarang</a>
		  </div>
		</div>
	</header>
	<section class="page-section" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <img src="frontend/img/planelogo.png" width="175px" height="175px" class="img-fluid" alt="Responsive image">
                </div>
                <br>
                <div class="text-center">
                    <p class="heading"><b>Halo <b><?php echo $_SESSION['username']; ?>!</b></p>
					<p class="heading">Anda telah login sebagai <b><?php echo $_SESSION['level']; ?>, yuk beli tiket!</b></p>
                </div>
			</div>
          </div>
        </div>
    </section>


	<!--Footer-->
	<footer class="footer">
		<div class="container">
		  <div class="row align-items-center">
			<div class="col-md-12">
				<span class="copyright">Copyright &copy; Tiara Nurazizah XII RPL 2</span>
			</div>
	  	  </div>
		</div>
	</footer>


	<script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
	<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
	<script src="frontend/scripts/main.js"></script>
</body>
</html>