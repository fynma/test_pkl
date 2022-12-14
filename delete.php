<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM `tbl_siswa` WHERE id= '$id'";
$hapus = mysqli_query($koneksi_db, $query);
if ($hapus){
    ?>
    <script language="javascript">document.location.href="tampil.php";</script>
    <?php
} else {
    echo "gagal hapus data ";
}
?>