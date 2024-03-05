<?php

// koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $jabatan = $_POST["jabatan"];
    $foto = $_POST["foto"];

    // query insert data
    $query = "INSERT INTO karyawan VALUES
        ('','$nama','$nik','$email','$jabatan','$foto')";
        mysqli_query($conn, $query);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Form Tambah Data Mahasiswa</h1>    
<br>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="nik">NIK :</label>
            <input type="text" name="nik" id="nik">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" id="jabatan">
        </li>
        <li>
            <label for="foto">Foto :</label>
            <input type="text" name="foto" id="foto">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>

    </ul>

</form>

</body>
</html>