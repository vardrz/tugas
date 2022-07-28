<?php
include 'koneksi.php';
$nim = $_GET['nim'];

// mendapat data file foto dari user
$foto = mysqli_query($conn, "SELECT foto from mahasiswa WHERE nim='$nim'")->fetch_array();
// hapus user dari db
mysqli_query($conn, "DELETE from mahasiswa WHERE nim='$nim'");
// hapus foto user dari folder foto
unlink("$foto[0]");
// redirect halaman view
header('location:view.php');
