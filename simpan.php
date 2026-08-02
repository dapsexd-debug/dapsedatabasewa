<?php
include "koneksi.php";

$nama = $_POST['nama'];
$wa = $_POST['wa'];

mysqli_query($conn,"INSERT INTO kontak(nama,wa)
VALUES('$nama','$wa')");

echo "Data berhasil dikirim.";
?>
