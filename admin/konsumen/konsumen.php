<?php
include'../../koneksi.php';
?>
    <h2><center>Data Konsumen<center></h2>
    <br>
    <div class="container">
        <a href="ly_create.php" class="btn btn-outline-success mr-3">Tambah</a>
        <br>
        <br>
        <table class="table table-bordered table-sm">
            <thead class="thead">
                <tr>
                <?php $nomor=1; ?>
                    <th>No.</th>
                    <th>No Identitas</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $tampil_data =$koneksi->query("SELECT * FROM admin where level='pengguna' order by id desc"); ?>
                <?php while ($data= $tampil_data->fetch_assoc()) {?>
                    <tr>
                        <td> <?php echo $nomor++; ?></td>
                        <td><?= $data['kode_customer'];?></td>
                        <td><?php  echo $data['username']; ?></td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['alamat']?></td>
                        <td><?= $data['phone']?></td>
                        <td><?= $data['jenis_kelamin']?></td>
                        <td><?= $data['password']?></td>
                        <td><?= $data['level']?></td>
                        <td>
                            <a href="ly_edit.php?id=<?php echo $data['id'];?>" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-outline-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?'\)">Delete</a>
                        </td>
                        </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
 
            
            
            
            
            
