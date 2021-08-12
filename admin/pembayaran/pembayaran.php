<?php
include'../../koneksi.php';
?>
    <h2><center>Data Pembayaran<center></h2>
    <br>
    <div class="container">
        <a href="ly_create.php" class="btn btn-outline-success mr-3">Tambah</a>
        <br>
        <br>
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                <?php $nomor=1; ?>
                    <th>No.</th>
                    <th>Jenis Pembayaran</th>
                    <th>Nama Bank</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $tampil_data =$koneksi->query("SELECT * FROM payment order by id desc"); ?>
                <?php while ($data= $tampil_data->fetch_assoc()) {?>
                    <tr>
                        <td> <?php echo $nomor++; ?></td>
                        <td><?php  echo $data['pembayaran']; ?></td>
                        <td><?= $data['nama']?></td>
                        <td>
                            <a href="ly_edit.php?id=<?php echo $data['id'];?>" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-outline-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?'\)">Delete</a>
                        </td>
                        </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
 
            
            
            
            
            
