<?php include "template/header.php" ?>
<?php include "template/footer.php" ?>
<?php include "template/sidebar.php" ?>
<?php include "function.php" ?>
<?php include "tambah.php" ?>

<div class="container" align="center"><h2>Selamat Datang admin</h2></div>

<div class="container">
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  <i>Tambah Data</i>
</button>


</div>
<?php 
$brg = query("SELECT * FROM master_brg");

// cari

 ?>



<!-- Modal -->
<br>
<div class="container">

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Harga Beli</th>
      <th scope="col"> Stok</th>
      <th scope="col"> Kategori</th>
	  <th scope="col"> Opsi</th>
      
    </tr>
  </thead>
  <tbody>
<?php $nomor=1; ?>
<?php foreach ($brg as $barang ) : ?>    
      
      <td><?php echo $nomor; ?></td>
      <td> <?= $barang["nama_brg"]; ?></td>
      <td>Rp. <?= number_format($barang["harga_jual"]); ?></td>
      <td>Rp. <?= number_format($barang["harga_beli"]); ?></td>
      <td> <?= $barang["stok"]; ?></td>
      <td> <?= $barang["kategori"]; ?></td>
    <td><a href="edit.php?id=<?= $barang["id_brg"]; ?>" class="btn btn-warning" >Edit</a>
    <a href="hapus.php?id=<?= $barang["id_brg"]; ?>" onclick="return confirm('yakin?');"  class="btn btn-danger">Hapus</a></td>
  </tbody>
<?php $nomor++; ?>
<?php endforeach; ?>    

</table>



