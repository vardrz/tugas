<?php

include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tptlhr = $_POST['tptlhr'];
$tgllhr = $_POST['thn'] . '-' . $_POST['bln'] . '-' . $_POST['tgl'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];
$foto = '';

$cekdata = ("SELECT nim FROM mahasiswa WHERE nim='$nim'");
$ada = mysqli_query($conn, $cekdata) or die();
if (mysqli_num_rows($ada) > 0) {
    die("NIM Sudah Ada!");
} else {
    if (($_FILES['foto']['name'])) {
        $folder = 'foto/';
        $format = $_FILES['foto']['type'];
        if ($format == 'image/jpeg' || $format == 'image/jpg' || $format == 'image/png') {
            $foto = $folder . $nim . ".png"; //nama file yang akan diupload
            $tmp_name = $_FILES["foto"]["tmp_name"];
            move_uploaded_file($tmp_name, $foto);
            mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$tptlhr','$tgllhr','$alamat','$kelas','$prodi','$nohp','$foto')");
            header('location:view.php');
        } else {
            die("Format file foto tidak didukung! (Harus .jpeg .jpg .png)");
        }
    }
}
