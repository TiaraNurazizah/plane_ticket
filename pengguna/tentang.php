<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="frontend/styles/main.css"> 

    <title>E-TIKET</title>
</head>
<body>
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

    <!--Galeri-->
    <div class="container">
        <br>
        <br>
            
            <h1 class="font-weight-light text-center mt-4 mb-0">Daftar Pesawat</h1>
            <br>
            <br>
            <div class="row text-center text-lg-left">
          
              <div class="col-lg-3 col-md-4 col-6">
                  <img class="img-fluid img-thumbnail" src="frontend/img/air asia.jpg" alt="" style="height:200px;">
                  <p><b style="margin-left:60px;">Pesawat Air Asia</b></p> 
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                  <img class="img-fluid img-thumbnail" src="frontend/img/citilink.jpeg" alt="" style="height:200px;">
                  <p><b style="margin-left:65px;">Pesawat Citilink</b></p> 
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                  <img class="img-fluid img-thumbnail" src="frontend/img/garuda indonesia.jpg" alt="" style="height:200px;">
                  <p><b style="margin-left:28px;">Pesawat Garuda Indonesia</b></p> 
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                  <img class="img-fluid img-thumbnail" src="frontend/img/merpati air.JPG" alt="" style="height:200px;">
                  <p><b style="margin-left:48px;">Pesawat Merpati Air</b></p> 
              </div>
              
            </div>
          
    </div>


    <!--Footer-->
    <footer class="footer">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12">
                <span class="copyright">Copyright &copy; Tiara Nurazizah XII RPL 2</span>
            </div>
            </div>
        </div>
    </footer>

        

<script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>  
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>

<!-- script lainnya -->
<script src="frontend/scripts/main.js"></script>
</body>
</html>