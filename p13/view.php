<?php

include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<body>
    <h1>DATA MAHASISWA</h1>
    <h3><a href="index.php">Tambah Data</a></h3>

    <table border="1" style="width: 100%">
        <tr>
            <td>FOTO</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>TEMPAT LAHIR</td>
            <td>TANGGAL LAHIR</td>
            <td>ALAMAT</td>
            <td>KELAS</td>
            <td>PROGDI</td>
            <td>NOMOR HP</td>
            <td>AKSI</td>
        </tr>
        <?php
        while ($row = $data->fetch_assoc()) {
        ?>
            <tr>
                <td align="center"><img src="<?= $row['foto']; ?>" width="100" height="100"></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tptlhr']; ?></td>
                <td><?= $row['tgllhr']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['prodi']; ?></td>
                <td><?= $row['nohp']; ?></td>
                <td>
                    <a href="edit.php?nim=<?= $row['nim']; ?>">Update</a> |
                    <a onclick="return confirm('Anda yakin ingin menghapus data ini?');" href="hapus.php?nim=<?= $row['nim']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>