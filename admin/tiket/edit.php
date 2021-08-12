<?php
include'../../koneksi.php';
?>

    <h2><center>Edit Data Tiket<center></h2>
    <br>
    <div class="container">
    			
        <?php 
            $tampil_data= $koneksi->query("SELECT * FROM ticket WHERE id='$_GET[id]'");
            $data = $tampil_data->fetch_assoc();                
        ?>
    	<form method="post">
			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Destinasi</label>
                <div class="col-sm-10">
                    <input type="text" name="destination" value="<?php echo $data['destination']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stok Tiket</label>
                <div class="col-sm-10">
                    <input type="text" name="stok" value="<?php echo $data['stok']; ?>" class="form-control" size="4" required>
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
            $koneksi->query("UPDATE ticket 
                            SET destination='$_POST[destination]',
                            stok='$_POST[stok]' WHERE id='$_GET[id]'");

            echo"<script>alert('Data Tiket berhasil di Update')</script>" ;
            echo "<script>location ='ly_tiket.php';</script>";  
            }
        ?>
    </div>
</body>
</html>