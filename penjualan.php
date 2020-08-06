<?php include "template/header.php" ?>
<?php include "template/footer.php" ?>
<?php include "template/sidebar.php" ?>
<?php include "function.php" ?>
<br>


<?php 
$brg = query("SELECT * FROM detail_penjualan 
              INNER JOIN master_brg ON detail_penjualan.id_brg=master_brg.id_brg
              INNER JOIN tb_penjualan ON detail_penjualan.id_penjualan=tb_penjualan.id_penjualan");

// cari

 ?>

<div class="container">
 
 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal Penjualan</th>
      <th scope="col">Nama Konsumen</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Harga Total</th>

      
    
      
    </tr>
  </thead>
  <tbody>
<?php $nomor=1; ?>
<?php foreach ($brg as $barang ) : ?>    
      
      <td><?php echo $nomor; ?></td>
      <td><?= $barang["nama_brg"]; ?></td>
      <td><?= $barang["tgl_jual"]; ?></td>
       <td><?= $barang["nama_konsumen"]; ?></td>
       <td><?= $barang["alamat"]; ?></td>
      <td> <?= $barang["jumlah"]; ?></td>
      <td>Rp. <?= number_format($barang["harga_satuan"]); ?></td>
      <td>Rp.<?= number_format($barang["harga_total"]);?></td>
      
      
    
    
  </tbody>
<?php $nomor++; ?>
<?php endforeach; ?>    

</table>

</div>
