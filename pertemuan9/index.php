<?php
// koneksi ke database

$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil dari table karyawan / query data karyawan

$result = mysqli_query($conn,"SELECT * FROM karyawan");


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
<tr>
    <td>1</td>
    <td>
        <a href="">Ubah Data</a> |
        <a href="">Hapus</a>
    </td>
    <td><img src="img/yulianto.jpg" alt="" width="50"></td>
    <td>004</td>
    <td>Yulianto</td>
    <td>yulianto@suryakumalaabadi.co.id</td>
    <td>Head of GA Division</td>
</tr>

</table>

</body>
</html>