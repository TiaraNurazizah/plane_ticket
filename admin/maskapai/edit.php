<?php
include'../../koneksi.php';
?>

    <h2><center>Edit Data Maskapai<center></h2>
    <br>
    <div class="container">
    			
        <?php 
            $tampil_data= $koneksi->query("SELECT * FROM plane WHERE id='$_GET[id]'");
            $data = $tampil_data->fetch_assoc();                
        ?>
    	<form method="post">
			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Maskapai</label>
                <div class="col-sm-10">
                    <input type="text" name="maskapai_kelas" value="<?php echo $data['maskapai_kelas']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" name="kode" value="<?php echo $data['kode']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" name="harga" value="<?php echo $data['harga']; ?>" class="form-control" size="4" required>
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
            $koneksi->query("UPDATE plane 
                            SET maskapai_kelas='$_POST[maskapai_kelas]',
                            kode='$_POST[kode]',
                            harga='$_POST[harga]' WHERE id='$_GET[id]'");

            echo"<script>alert('Data maskapai berhasil di Update')</script>" ;
            echo "<script>location ='ly_maskapai.php';</script>";  
            }
        ?>
    </div>
</body>
</html>