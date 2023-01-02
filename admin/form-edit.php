<?php
include 'koneksi.php';
$id_mahasiswa   = $_GET['id_mahasiswa'];
$query          = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";
$hasil          = mysqli_query($db, $query);
$data_mahasiswa = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="col-lg-6 m-auto p-3">
        <div class="container">
            <div class="card shadow">
                <div class="card-header">Edit Data Mahsiswa</div>
                <div class="card-body">
                    <form action="proses-edit.php" method="post">
                        <input type="hidden" name="id_mahasiswa" value="<?php echo $data_mahasiswa['id_mahasiswa'];?>">
                        <div class="form-group">
                        <label>NIM</label>
                            <input type="text" class="form-control" name="nim" maxlength="9" value="<?php echo $data_mahasiswa['nim'];?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $data_mahasiswa['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label>Progdi</label>
                            <select class="form-control" name="progdi" >
                                <?php if ($data_mahasiswa['progdi'] == "TEKNIK INFORMATIKA"):?>
                                <option value="TEKNIK INFORMATIKA" selected>TEKNIK INFORMATIKA</option>
                                <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                <?php else :?>
                                <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                <option value="SISTEM INFORMASI" selected>SISTEM INFORMASI</option>
                                <?php endif ?>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label>Tempat dan Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="tempat_lahir" required value="<?= $data_mahasiswa['tempat_lahir']?>">
                                </div>
                                <div class="col-lg-4">
                                    
                                    <select class="rounded h-100" name="tanggal_lahir">
                                    <?php
                                    for($i = 1; $i <= 31; $i++){
                                        echo "<option value='$i'>$i</option>";
                                    }?>
                                    </select>

                                    <select class="rounded h-100" name="bulan_lahir">
                                    <?php
                                    $bulan = 1;
                                    do {
                                        echo "<option value='$bulan'>$bulan</option>";
                                        $bulan++;
                                    } while ($bulan <=12);
                                    ?>
                                     </select>
                                
                                    <select class="rounded h-100" name="tahun_lahir">
                                    <?php
                                    $tahun = 1970;
                                    while($tahun <= 2030){
                                        echo "<option value='$tahun'>$tahun</option>";
                                        $tahun++;
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jekel</label>
                            <select class="form-control" name="jekel">
                                <?php 
                                switch($data_mahasiswa['jekel']){
                                    case "Laki-laki":
                                ?>
                                <option value="Laki-laki" selected>Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <?php 
                                    break;
                                    default:
                                ?>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                                <?php break;}?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" ><?php echo $data_mahasiswa['alamat'];?></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <button class="btn btn-warning" type="">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>