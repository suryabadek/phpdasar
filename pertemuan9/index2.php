<?php
// koneksi ke database

$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil dari table karyawan / query data karyawan

$result = mysqli_query($conn,"SELECT * FROM karyawan");


// ambil data (fetch) karyawan dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mngembalikan array numerik dan araray associative
// mysqli_fetch_object()

// while( $karyawan = mysqli_fetch_assoc($result)){
// var_dump($karyawan);
// }


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
<?php while ($row=mysqli_fetch_assoc($result)) : ?>
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
<?php endwhile; ?>
</table>

</body>
</html>