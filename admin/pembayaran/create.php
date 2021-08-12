<?php
include'../../koneksi.php';
?>

    <h2><center>Tambah Data Pembayaran<center></h2>
    <br>
    <div class="container">
    	<?php
        if(isset($_POST['submit'])){
            $koneksi->query("INSERT INTO payment(pembayaran, nama) VALUES ('$_POST[pembayaran]', '$_POST[nama]')");
            echo"<script>alert('Data pembayaran berhasil di simpan')</script>" ;
            echo "<script>location ='ly_pembayaran.php';</script>"; 
        }
        ?>
    	
    	<form action="create.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
				<div class="col-sm-10">
					<input type="text" name="pembayaran" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Bank</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" size="4" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
        
    </div>
