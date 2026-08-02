<?php
session_start();
if(!isset($_SESSION['admin'])){
    die("Akses ditolak");
}

include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM kontak");
?>

<h2>Database Kontak</h2>

<table border="1">
<tr>
<th>Nama</th>
<th>Nomor WA</th>
</tr>

<?php while($d=mysqli_fetch_assoc($data)){ ?>
<tr>
<td><?= $d['nama']; ?></td>
<td><?= $d['wa']; ?></td>
</tr>
<?php } ?>

</table>
