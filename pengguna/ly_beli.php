<?php
include '../koneksi.php';
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
if (isset($_GET['submit'])) {
    $jumlah = $_GET['jumlah'];
    $harga = $_GET['harga'];
    $total = $jumlah * $harga;
}
?>
</script>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="frontend/styles/main.css">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
        function calculate() {
            var myBox1 = document.getElementById('jumlah').value;
            var myBox2 = document.getElementById('harga').value;
            var result = document.getElementById('total');
            var myResult = myBox1 * myBox2;
            result.value = myResult;
        }
    </script>

  <title>E-TIKET</title>

</head>
<body id="page-top">

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
		  </div>
		</div>
	</header>

    <!--Tentang-->
    <section class="page-section" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <img src="frontend/img/planelogo.png" width="175px" height="175px" class="img-fluid" alt="Responsive image">
                </div>
                <br>
                <div class="text-center">
                    <p class="heading"><b>Yuk Beli Tiket!</b></p>
                </div>

                <!--<form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kelas :</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sekolah :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Whatsapp :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="No Whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alasan Masuk Ambalan Ini :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim!</button>
                  </form>-->
             <form role="form" method="post" onsubmit="return validation(this)">
				<div class="form-group">
					<label for="inputState">Nomor Konsumen</label><br>
					<?php include '../koneksi.php'; ?>
					<select name="kode_customer" id="kode_customer" class="form-control" onchange='changeValue(this.value)' required>
					<option>--Nomor Konsumen--</option>
					<?php 
					$query = mysqli_query($koneksi, "SELECT * from admin order by kode_customer esc");
					$result = mysqli_query($koneksi, "SELECT * from admin");
					$a = "var nama = new Array();\n;";
					while ($row = mysqli_fetch_array($result)) {
						echo '<option name="kode_customer" value="'.$row['kode_customer'] . '">' . $row['kode_customer'] . '</option>';   
            		$a .= "nama['" . $row['kode_customer'] . "'] = {nama:'" . addslashes($row['nama'])."'};\n";
					}
					?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Konsumen</label><br>
					<input class="form-control" type="text" name="nama" id="nama" required="">
				</div>
				
				<div class="form-group">
					<label for="inputState">Destinasi</label><br>
					<select name="destination" id="inputState">
						<option value="">--Pilih Asal Kota dan Tujuan--</option>
						<?php 
						$sql = "SELECT * FROM ticket ORDER BY destination DESC";
						$hasil = mysqli_query($koneksi,$sql) or die (mysqli_error());
						while ($rows=mysqli_fetch_array($hasil)) {
                  		echo "<option value='". $rows['destination']."'>". $rows['destination']." </option>";
                		}
						 ?>
					</select>
				</div>
				<div class="form-group">
					<label for="inputState">Pilih Maskapai</label><br>
					<?php include '../koneksi.php'; ?>
					<select name="maskapai_kelas" id="maskapai_kelas" class="form-control" onchange='changeValues(this.value)' required>
					<option>--Pilih Maskapai--</option>
					<?php 
					$query = mysqli_query($koneksi, "SELECT * from plane order by maskapai_kelas esc");
					$result = mysqli_query($koneksi, "SELECT * from plane");
					$b = "var harga = new Array();\n;";
					while ($row = mysqli_fetch_array($result)) {  
          			echo '<option harga="maskapai_kelas" value="'.$row['maskapai_kelas'] . '">' . $row['maskapai_kelas'] . '</option>';   
    				$b .= "harga['" . $row['maskapai_kelas'] . "'] = {harga:'" . addslashes($row['harga'])."'};\n";
    				}
					 ?>
					</select>
				</div>
				<div class="form-group">
					<label>Tanggal Penerbangan</label>
					<input type="date" class="form-control" name="tanggal">
				</div>
				<div class="form-group">
					<label>Jam Penerbangan</label><br>
					<input type="time" class="form-control" name="jam">
				</div>
				<div class="form-group">
					<label for="inputState">Pembayaran</label>
					<select id="inputState" class="form-control" name="pembayaran">
						<option selected>--Pembayaran--</option>
						<option>Cash</option>
						<option>Kredit</option>
						<option>Transfer</option>
					</select>
				</div>
				<div class="form-group">
					<label>Jumlah Penumpang</label>
					<input type="text" class="form-control" name="jumlah" id="jumlah" oninput="calculate()">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input class="form-control" name="harga" id="harga" readonly="" oninput="calculate()">
				</div>
				<script type="text/javascript">
				<?php 
				echo $b ;
				 ?>
				 function changeValues(id){
				 	document.getElementById('harga').value = harga[id].harga;
				 }
				</script>
				<div class="form-group">
					<label>Total</label>
					<input class="form-control" name="total" id="total" readonly="">
				</div>
				<div>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>

<?php
//Include file koneksi, untuk koneksikan ke database
include "../koneksi.php";

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_customer = $_POST['kode_customer'];
    $nama = $_POST['nama'];
    $destination = $_POST['destination'];
    $jumlah = $_POST['jumlah'];
    $maskapai_kelas = $_POST['maskapai_kelas'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $pembayaran = $_POST['pembayaran'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];

    $sql = "INSERT INTO `purchase`(`kode_customer`, `nama`, `destination`, `jumlah`, `maskapai_kelas`, `tanggal`, `jam`, `pembayaran`, `harga`, `total`)
    VALUES ('$kode_customer','$nama','$destination','$jumlah','$maskapai_kelas','$tanggal','$jam', '$pembayaran','$harga','$total')";
    //Mengeksekusi/menjalankan query diatas
    $hasil = mysqli_query($koneksi, $sql);
    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        echo"<script>alert('Tiket Anda Sudah Dibuat!')</script>" ;
 		echo "<script>location ='tran.php';</script>"; 
    } else {
        echo "";
    }
}
?>

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
