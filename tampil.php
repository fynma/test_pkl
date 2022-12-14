<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
            <tr>
                <th>
                    Id Siswa
                </th>
                <th >
                    Nama
                </th>
                <th >
                    Jenis kelamin
                </th>
                <th >
                    Alamat
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Hapus
                </th>
                </tr>
                    <?php
                    $data = mysqli_query($koneksi_db,"SELECT * FROM tbl_siswa");
                    while($tampil = mysqli_fetch_array($data)){
                        

                        ?> 
                        <tr>
                            <td><?php echo $tampil['id']; ?> </td>
                            <td><?php echo $tampil['nama']; ?></td>
                            <td><?php 
                                    if ($tampil['jenis_kelamin'] == 0){
                                        echo "laki-laki";
                                    } else {
                                        echo "perempuan";
                                    }
                                    ?></td>
                            <td><?php echo $tampil['alamat']; ?></td>
                            <td><a href="update.php?id=<?php echo $tampil ['id']; ?>" >Update</td>
                            <td><a href="delete.php?id=<?php echo $tampil['id']; ?> "onclick="return confirm('apakah anda yakin?')">Hapus</a></td>
                        </tr>
                        <?php 
                    }
                    ?>
    </table>
    <h4>Ingin menambahkan data baru??<a href="index.php">tambahkan disini</a></h4>
</body>
</html>