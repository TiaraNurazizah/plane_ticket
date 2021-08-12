<?php
include '../../koneksi.php';
?>
    <h2><center>Data Transaksi<center></h2>
    <br>
    <div class="container">
        <br>
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                <?php $nomor = 1;?>
                    <th>No Penjualan</th>
                    <th>No Customer</th>
                    <th>Nama Lengkap</th>
                    <th>Destinasi</th>
                    <th>Jumlah Penumpang</th>
                    <th>Maskapai</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pembayaran</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $tampil_data = $koneksi->query("SELECT * FROM purchase order by id desc");?>
                <?php while ($data = $tampil_data->fetch_assoc()) {?>
                    <tr>
                        <td><?=$nomor++;?></td>
                        <td><?=$data['kode_customer']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['destination']?></td>
                        <td><?=$data['jumlah']?></td>
                        <td><?=$data['maskapai_kelas']?></td>
                        <td><?=$data['tanggal']?></td>
                        <td><?=$data['jam']?></td>
                        <td><?=$data['pembayaran']?></td>
                        <td>Rp <?=$data['harga']?></td>
                        <td>Rp <?=$data['total']?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?'\)">Delete</a>
                        </td>
                        </tr>

                <?php }?>
            </tbody>
        </table>
    </div>






