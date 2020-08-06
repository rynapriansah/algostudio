<?php
$conec=mysqli_connect("localhost","root","","algostudio");

function tambah($data) {
  global $conec;
  $nama_brg = htmlspecialchars($data["nama_brg"]);
  $harga_jual = htmlspecialchars($data["harga_jual"]);
  $harga_beli = htmlspecialchars($data["harga_beli"]);
  $stok = htmlspecialchars($data["stok"]);
  $kategori = htmlspecialchars($data["kategori"]);



  $query = "INSERT INTO master_brg
        VALUES
        ('', '$nama_brg', '$harga_jual', '$harga_beli', '$stok', '$kategori')
      ";
  mysqli_query($conec, $query);

  return mysqli_affected_rows($conec);
}

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}


?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
          <div class="modal-body">
             <div class="form-group">
                  <label class="control-label" >Nama Barang </label>
                    <input type="text" name="nama_brg" class="form-control" required="">
        </div> 
        <div class="form-group">
                  <label> Harga Jual</label>
                    <input type="text" name="harga_jual" class="form-control" required="">
        </div>
        <div class="form-group">
                  <label class="control-label" >Harga Beli </label>
                    <input type="text" name="harga_beli" class="form-control" required="">
        </div>
        <div class="form-group">
                  <label class="control-label" >Stok </label>
                    <input type="text" name="stok" class="form-control" required="">
        </div>
        <div class="form-group">
                  <label class="control-label" > Kategori </label>
                    <input type="text" name="kategori" class="form-control" required="">
        </div>                      
            </div>
                </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" >Reset</button>
        <button type="submit" name="submit" class="btn btn-dark">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>

