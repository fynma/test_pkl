<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
    <form action="" method="post">
        <h1>FORM DATA SISWA</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="0">Laki-Laki</td>
                <td><input type="radio" name="jenis_kelamin" value="1">Perempuan</td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
        </table>
        <div class="kirim">
        <input type="submit" value="kirim" name="submit">
        </div>
    </form>
    <h4>Lihat data siswa <a href="tampil.php">disini</a></h4>
</div>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $nama          = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat        = $_POST['alamat'];

        $query = "INSERT INTO tbl_siswa(`nama`, `jenis_kelamin`, `alamat`) VALUES ('$nama','$jenis_kelamin','$alamat')";
        mysqli_query($koneksi_db,$query);

        echo "<script>
            alert ('data berhasil disimpan!!');
        </script>";
    } 
?>

