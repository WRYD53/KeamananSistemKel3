<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="p-5">
        <p><h2 class="text-center">INPUT DATA MAHASISWA</h2></p>
        <div class="container">
            <p><a href="input.php" class="btn btn-warning">Tambah</a></p>
            <div class="card shadow">
                <table class="table table-striped">
                    <tr>
                        <th width="1%">No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Progdi</th>
                        <th>TTL</th>
                        <th>Jekel</th>
                        <th>Alamat</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php
                    include 'proses-list.php';
                    $no=1;
                    foreach ($data_mahasiswa as $mahasiswa) :
                    ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $mahasiswa['nim']?></td>
                        <td><?php echo $mahasiswa['nama']?></td>
                        <td><?php echo $mahasiswa['progdi']?></td>
                        <td><?php echo $mahasiswa['tempat_lahir']?>, <?=$mahasiswa['tanggal_lahir']?>-<?=$mahasiswa['bulan_lahir']?>-<?=$mahasiswa['tahun_lahir']?></td>
                        <td><?php echo $mahasiswa['jekel']?></td>
                        <td><?php echo $mahasiswa['alamat']?></td>
                        <td>
                            <a href="form-edit.php?id_mahasiswa=<?php echo $mahasiswa['id_mahasiswa']?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="proses-hapus.php?id_mahasiswa=<?php echo $mahasiswa['id_mahasiswa']?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach?>
                </table>
            </div>
        </div>
    </div>    
</body>
</html>