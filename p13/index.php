<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>

<body>

    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <td>
                    <table border="0" cellpadding="10" cellspacing="0">
                        <tr bgcolor="blue">
                            <td colspan="3" align="center">
                                <font face="arial" size="5" color="aqua">FORM INPUT DATA MAHASISWA</font>
                            </td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nim" maxlength="11" placeholder="NIM" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Nama" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tptlhr" placeholder="Tempat" required>
                                <select name="tgl">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                                <select name="bln">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                                <select name="thn">
                                    <?php
                                    for ($i = 1995; $i <= 2005; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat" placeholder="Alamat" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><input type="text" name="kelas" placeholder="Kelas" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td>
                                <select name="prodi" style="width: 370px;">
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td><input type="text" name="nohp" placeholder="Nomor HP" maxlength="13" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td><input type="file" name="foto" required></td>
                        </tr>
                        <tr bgcolor="green">
                            <td align="right" colspan="3">
                                <a href="view.php" style="color:white; text-decoration:none; float:left;">Lihat Data</a>
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