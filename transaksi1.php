<?php include 'index1.php'; ?>
<?php error_reporting(E_ALL^(E_NOTICE | E_WARNING)); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Pembelian Tiket Pesawat Online</h1>
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">
			<form role="form" method="post" onsubmit="return validation(this)">
				<div class="form-group">
					<label for="inputState">Nomor Konsumen</label><br>
					<?php include 'koneksi.php'; ?>
					<select name="no_identitas" id="no_identitas" class="form-control" onchange='changeValue(this.value)' required>
					<option>--Nomor Konsumen--</option>
					<?php 
					$query = mysqli_query($koneksi, "select * from konsumen order by no_identitas esc");
					$result = mysqli_query($koneksi, "select * from konsumen");
					$a = "var nama_konsumen = new Array();\n;";
					while ($row = mysqli_fetch_array($result)) {
						echo '<option name="no_identitas" value="'.$row['no_identitas'] . '">' . $row['no_identitas'] . '</option>';   
            		$a .= "nama_konsumen['" . $row['no_identitas'] . "'] = {nama_konsumen:'" . addslashes($row['nama_konsumen'])."'};\n";
					}
					?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Konsumen</label><br>
					<input class="form-control" name="nama_konsumen" id="nama_konsumen" readonly="">
				</div>
				<script type="text/javascript">
					<?php 
					echo $a; ?>
					function changeValue(id){
						document.getElementById('nama_konsumen').value = nama_konsumen[id].nama_konsumen;
					};
				</script>
				<div class="form-group">
					<label for="inputState">Destinasi</label><br>
					<select name="kd_barang" id="inputState">
						<option value="">--Pilih Asal Kota dan Tujuan--</option>
						<?php 
						$sql = "SELECT * FROM tiket ORDER BY kd_barang DESC";
						$hasil = mysqli_query($koneksi,$sql) or die (mysqli_error());
						while ($rows=mysqli_fetch_array($hasil)) {
                  		echo "<option value='". $rows['kd_barang']."'>". $rows['kd_barang']." </option>";
                		}
						 ?>
					</select>
				</div>
				<div class="form-group">
					<label for="inputState">Pilih Maskapai</label><br>
					<?php include 'koneksi.php'; ?>
					<select name="maskapai_kelas" id="maskapai_kelas" class="form-control" onchange='changeValues(this.value)' required>
					<option>--Pilih Maskapai--</option>
					<?php 
					$query = mysqli_query($koneksi, "select * from maskapai order by maskapai_kelas esc");
					$result = mysqli_query($koneksi, "select * from maskapai");
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
					<input type="time" name="form-control" name="jam">
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
					<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
  $no_identitas = $_POST['no_identitas'];
  $nama_konsumen = $_POST['nama_konsumen'];
  $kd_barang =$_POST['kd_barang'];
  $jumlah = $_POST['jumlah'];
  $maskapai_kelas = $_POST['maskapai_kelas'];
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $pembayaran = $_POST['pembayaran'];
  $harga = $_POST['harga'];
  $total = $_POST['total'];



    $simpan =$_POST['simpan'];

    if ($simpan) {
      $sql = $koneksi-> query("insert into pembelian (no_identitas, nama_konsumen, kd_barang, jumlah, maskapai_kelas, tanggal, jam, pembayaran, harga, total)values('$no_identitas','$nama_konsumen', '$kd_barang', '$jumlah', '$maskapai_kelas', '$tanggal', '$jam', '$pembayaran', '$harga', '$total')");
      if ($sql) {
        ?>
         <script type="text/javascript">
          alert("tiket berhasil ditambah");
          window.location.href="tiket1.php";
        </script>
        
        <?php
 
      }
    }
?>