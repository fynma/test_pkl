<?php
include 'koneksi.php';
//proses update
$ID = $_POST ['ID'];
$nama = $_POST ['nama'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$alamat = $_POST ['alamat'];
$submit = $_POST ['submit'];
if ($submit) {
    $update= "UPDATE tbl_siswa SET `nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`alamat`='$alamat' WHERE `id`='$ID'";
    $hasil= mysqli_query($koneksi_db,$update) ;
    if ($hasil){
          header ('location:tampil.php');
    }
}
?>