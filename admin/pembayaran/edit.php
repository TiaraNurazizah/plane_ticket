<?php
include'../../koneksi.php';
?>

    <h2><center>Edit Data Tiket<center></h2>
    <br>
    <div class="container">
    			
        <?php 
            $tampil_data= $koneksi->query("SELECT * FROM payment WHERE id='$_GET[id]'");
            $data = $tampil_data->fetch_assoc();                
        ?>
    	<form method="post">
			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                <div class="col-sm-10">
                    <input type="text" name="pembayaran" value="<?php echo $data['pembayaran']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Bank</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" size="4" required>
                </div>
            </div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" value="SIMPAN" name="update">
				</div>
			</div>
		</form>
        <?php 
            if (isset ($_POST['update'])) {
            $koneksi->query("UPDATE payment 
                            SET pembayaran='$_POST[pembayaran]',
                            nama='$_POST[nama]' WHERE id='$_GET[id]'");

            echo"<script>alert('Data Pembayaran berhasil di Update')</script>" ;
            echo "<script>location ='ly_pembayaran.php';</script>";  
            }
        ?>
    </div>
</body>
</html>