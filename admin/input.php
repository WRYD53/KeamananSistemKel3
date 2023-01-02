<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="m-auto col-lg-6 p-3">
        <div class="container">
            <div class="card shadow">
                <div class="card-header">Input Data Mahsiswa</div>
                <div class="card-body">
                    <form action="proses-input.php" method="post">
                        <div class="form-group">
                        <label>NIM</label>
                            <input type="text" class="form-control" name="nim" maxlength="9" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Progdi</label>
                            <select class="form-control" name="progdi" >
                                <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label>Tempat dan Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="tempat_lahir" required>
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
                            <select name="jekel" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a class="btn btn-warning" href="index.php">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>