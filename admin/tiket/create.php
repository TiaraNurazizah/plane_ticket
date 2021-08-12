<?php
include'../../koneksi.php';
?>

    <h2><center>Tambah Data Tiket<center></h2>
    <br>
    <div class="container">
    	<?php
        if(isset($_POST['submit'])){
            $koneksi->query("INSERT INTO ticket(destination, stok) VALUES ('$_POST[destination]', '$_POST[stok]')");
            echo"<script>alert('Data tiket berhasil di simpan')</script>" ;
            echo "<script>location ='ly_tiket.php';</script>"; 
        }
        ?>
    	
    	<form action="create.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Destinasi</label>
				<div class="col-sm-10">
					<input type="text" name="destination" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Stok Tiket</label>
				<div class="col-sm-10">
					<input type="text" name="stok" class="form-control" size="4" required>
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
