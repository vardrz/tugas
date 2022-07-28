<?php

include 'koneksi.php';
$nim = $_GET['nim'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'")->fetch_assoc();
list($thn, $bln, $tgl) = explode('-', $data['tgllhr']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>

<body>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nimLama" value="<?= $data['nim']; ?>">
        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <td>
                    <table border="0" cellpadding="10" cellspacing="0">
                        <tr bgcolor="blue">
                            <td colspan="3" align="center">
                                <font face="arial" size="5" color="aqua">FORM UPDATE DATA MAHASISWA</font>
                            </td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nimBaru" maxlength="11" value="<?= $data['nim']; ?>" placeholder="NIM" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" value="<?= $data['nama']; ?>" placeholder="Nama" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tptlhr" value="<?= $data['tptlhr']; ?>" placeholder="Tempat" required>
                                <select name="tgl">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        if ($tgl == $i) {
                                            echo "<option value='$i' selected>$i</option>";
                                        } else {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <select name="bln">
                                    <?php
                                    $namaBulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                                    for ($i = 1; $i <= 12; $i++) {
                                        if ($bln == $i) {
                                            echo "<option value='$i' selected>" . $namaBulan[$i] . "</option>";
                                        } else {
                                            echo "<option value='$i'>" . $namaBulan[$i] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <select name="thn">
                                    <?php
                                    for ($i = 1995; $i <= 2005; $i++) {
                                        if ($thn == $i) {
                                            echo "<option value='$i' selected>$i</option>";
                                        } else {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat" value="<?= $data['alamat']; ?>" placeholder="Alamat" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><input type="text" name="kelas" value="<?= $data['kelas']; ?>" placeholder="Kelas" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td>
                                <select name="prodi" style="width: 370px;">
                                    <?php
                                    $prodi = ["Sistem Informasi", "Teknik Informatika", "Manajemen Informatika", "Komputerisasi Akuntansi"];
                                    for ($i = 0; $i < 4; $i++) {
                                        if ($data['prodi'] == $prodi[$i]) {
                                            echo "<option value='$prodi[$i]' selected>$prodi[$i]</option>";
                                        } else {
                                            echo "<option value='$prodi[$i]'>$prodi[$i]</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td><input type="text" name="nohp" value="<?= $data['nohp']; ?>" placeholder="Nomor HP" maxlength="13" size="50" required></td>
                        </tr>
                        <!-- <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td><input type="file" name="foto" required></td>
                        </tr> -->
                        <tr bgcolor="green">
                            <td align="right" colspan="3">
                                <button type="submit">Simpan</button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>