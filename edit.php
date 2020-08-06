<?php 
require 'template/header.php';
require 'template/footer.php';
require 'template/sidebar.php';
require 'function.php';

$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$barang = query("SELECT * FROM master_brg WHERE id_brg = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil diubah atau tidak
  if( edit($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>

<h1 align="center">Edit data</h1>
<div class="container">
  <form action="" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?= $barang["id_brg"]; ?>">
  
        <div class="form-group">
          <div class="modal-body">
             <div class="form-group">
                  <label class="control-label" >Nama Barang </label>
                    <input type="text" name="nama_brg" class="form-control" value="<?= $barang["nama_brg"]; ?>" required="">
        </div> 
        <div class="form-group">
                  <label class="control-label" >Harga Jual </label>
                    <input type="text" name="harga_jual" class="form-control" value="<?= $barang["harga_jual"]; ?>" required="">
        </div>                      
        
        <div class="form-group">
                  <label class="control-label" >Harga Beli</label>
                    <input type="number" name="harga_beli" class="form-control" value="<?= $barang["harga_beli"]; ?>" required="">
        </div>
        <div class="form-group">
                  <label class="control-label" >stok </label>
                    <input type="number" name="stok" class="form-control" value="<?= $barang["stok"]; ?>" required="">
        </div>
        <div class="form-group">
                  <label class="control-label" >Kategori </label>
                    <input type="text" name="kategori" class="form-control" value="<?= $barang["kategori"]; ?>" required="">
        </div>
        <br>
      <div class="modal-footer ml-auto">
        <a href="index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        <button type="submit" name="submit" class="btn btn-dark">Ubah</button>
      
      </form>
      </div>
