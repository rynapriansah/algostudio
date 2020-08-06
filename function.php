<?php 
$conec=mysqli_connect("localhost","root","","algostudio");
// koneksi kedatabse

function query($query) {
	global $conec;
	$result = mysqli_query($conec,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
 }
function edit($data) {
  global $conec;

  $id = $data["id"];
  $nama_brg = htmlspecialchars($data["nama_brg"]);
  $harga_jual = htmlspecialchars($data["harga_jual"]);
  $harga_beli = htmlspecialchars($data["harga_beli"]);
  $stok = htmlspecialchars($data["stok"]);
  $kategori = htmlspecialchars($data["kategori"]);

 
  $query = "UPDATE master_brg SET
        nama_brg = '$nama_brg',
        harga_jual = '$harga_jual',
        harga_beli = '$harga_beli',
        stok = '$stok',
        kategori = '$kategori'
        WHERE id_brg = $id
      ";
  // var_dump($query); die;
  mysqli_query($conec, $query);

  return mysqli_affected_rows($conec); 
}
function hapus($id) {
  global $conec;
  mysqli_query($conec, "DELETE FROM master_brg WHERE id_brg = $id");
  return mysqli_affected_rows($conec);
}
