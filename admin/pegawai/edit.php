<?php
include'../../koneksi.php';
?>


    <h2><center>Edit Data Pegawai<center></h2>
    <br>
    <div class="container">
    			
        <?php 
            $tampil_data= $koneksi->query("SELECT * FROM admin WHERE id='$_GET[id]'");
            $data = $tampil_data->fetch_assoc();                
        ?>
    	<form method="post">
			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <input type="text" name="level" value="<?php echo $data['level']; ?>" class="form-control" size="4" required>
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
            $koneksi->query("UPDATE admin 
                            SET username='$_POST[username]',
                            nama='$_POST[nama]',
                            alamat='$_POST[alamat]', 
                            phone='$_POST[phone]', 
                            jenis_kelamin='$_POST[jenis_kelamin]', 
                            password='$_POST[password]', 
                            level='$_POST[level]' WHERE id='$_GET[id]'");

            echo"<script>alert('Data user berhasil di Update')</script>" ;
            echo "<script>location ='ly_pegawai.php';</script>";  
            }
        ?>
    </div>
</body>
</html>