<?php
include'../../koneksi.php';
?>


    <h2><center>Tambah Data Konsumen<center></h2>
    <br>
    <div class="container">
    	<?php
        if(isset($_POST['submit'])){
            $koneksi->query("INSERT INTO admin(kode_customer, username, nama, alamat, phone, jenis_kelamin, password, level) VALUES ('$_POST[kode_customer]', '$_POST[username]', '$_POST[nama]', '$_POST[alamat]', '$_POST[phone]', '$_POST[jenis_kelamin]', '$_POST[password]', '$_POST[level]')");
            echo"<script>alert('Data user berhasil di simpan')</script>" ;
            echo "<script>location ='ly_konsumen.php';</script>"; 
        }
        ?>
    	
    	<form action="create.php" method="post">
    		<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Identitas</label>
                <div class="col-sm-10">
                    <input type="text" name="kode_customer" class="form-control" size="4" required>
                </div>
            </div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
					<input type="text" name="username" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Konsumen</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="phone" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<input type="text" name="jenis_kelamin" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="text" name="password" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-10">
					<input type="text" name="level" class="form-control" size="4" required>
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
