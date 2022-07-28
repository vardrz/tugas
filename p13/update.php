<?php

include 'koneksi.php';

$nimLama = $_POST['nimLama'];
$nimBaru = $_POST['nimBaru'];
$nama = $_POST['nama'];
$tptlhr = $_POST['tptlhr'];
$tgllhr = $_POST['thn'] . '-' . $_POST['bln'] . '-' . $_POST['tgl'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];

$fotoLama = "foto/$nimLama.png";
$fotoBaru = "foto/$nimBaru.png";

mysqli_query($conn, "UPDATE mahasiswa SET nim='$nimBaru', nama='$nama', tptlhr='$tptlhr', tgllhr='$tgllhr', alamat='$alamat', kelas='$kelas', prodi='$prodi', nohp='$nohp', foto='$fotoBaru' WHERE nim='$nimLama'");

rename($fotoLama, $fotoBaru);

header('location:view.php');
