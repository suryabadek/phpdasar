<?php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Foto</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jabatan</th>
</tr>

<?php $i = 1; ?>
<?php foreach ($karyawan as $row) : ?>
<tr>
    <td><?php echo $i; ?></td>
    <td>
        <a href="">Ubah Data</a> |
        <a href="">Hapus</a>
    </td>
    <td><img src="img/<?php echo $row["foto"] ?> " alt="" width="50"></td>
    <td><?php echo $row["nik"] ?></td>
    <td><?php echo $row["nama"] ?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["jabatan"] ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>