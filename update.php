<?php
include 'koneksi.php';
$ID=$_GET['id'];
$query="SELECT * FROM tbl_siswa WHERE id='$ID';";
$hasil=mysqli_query($koneksi_db, $query);
$data=mysqli_fetch_array($hasil);
?>
<html lang="en">
<head>
    <title>Halaman edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses_update.php" method="post" >
            <table style="border=1">
                <tr>
                    <input type="hidden" name="ID" value="<?php echo $data ['id'];?>">
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $data ['nama'];?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="0" <?php if ($data['jenis_kelamin'] == 0) { echo 'checked';}?>>Laki-Laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="1" <?php if ($data['jenis_kelamin'] == 1) { echo 'checked';}?>>Perempuan</td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $data ['alamat'];?>"></td>
                </tr>
            </table>
            <input type="submit" value="kirim" name="submit">
        </form>
</body>
</html>