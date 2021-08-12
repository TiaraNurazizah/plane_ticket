<?php
include'../../koneksi.php';
?>

    <h2><center>Tambah Data Maskapai<center></h2>
    <br>
    <div class="container">
    	<?php
        if(isset($_POST['submit'])){
            $koneksi->query("INSERT INTO plane(maskapai_kelas, kode, harga) VALUES ('$_POST[maskapai_kelas]', '$_POST[kode]', '$_POST[harga]')");
            echo"<script>alert('Data maskapai berhasil di simpan')</script>" ;
            echo "<script>location ='ly_maskapai.php';</script>"; 
        }
        ?>
    	
    	<form action="create.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Maskapai</label>
				<div class="col-sm-10">
					<input type="text" name="maskapai_kelas" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode</label>
				<div class="col-sm-10">
					<input type="text" name="kode" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga</label>
				<div class="col-sm-10">
					<input type="text" name="harga" class="form-control" size="4" required>
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
