<label>Tanggal</label>
<select>
<?php
for($i = 1; $i <= 31; $i++){
    echo "<option value='$i'>$i</option>";
}?>
</select>

<label>Bulan</label>
<select>
<?php
$bulan = 1;
do {
	echo "<option value='$bulan'>$bulan</option>";
	$bulan++;
} while ($bulan <=12);
?>
</select>

<label>Tahun</label>
<select>
<?php
$tahun = 1980;
while($tahun <= 2030){
	echo "<option value='$tahun'>$tahun</option>";
	$tahun++;
}
?>
</select>

-------------

<select name="jekel" class="form-control">
                                <?php if ($data_mahasiswa['jekel'] == "Laki-laki"): ?>
                                <option value="Laki-laki" selected>Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <?php else : ?>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                                <?php endif ?>
                            </select>


-----------------
<?php
include 'koneksi.php';
$cek 	=$_POST['cek'];
switch ($cek) {
    case 1; // Menggunakan semi colon
	    $sql 	= "SELECT * FROM mahasiswa" ;
		$hasil	= mysqli_query($db, $sql);
		$jumlah	= mysqli_num_rows($hasil);
        echo $jumlah;
        break;
    case 2; // Menggunakan semi colon
	    $sql 	= "SELECT * FROM mahasiswa where progdi = 'TEKNIK INFORMATIKA'" ;
		$hasil	= mysqli_query($db, $sql);
		$jumlah	= mysqli_num_rows($hasil);
        echo $jumlah;
        break;
    default:
	    $sql 	= "SELECT * FROM mahasiswa where progdi = 'SISTEM INFORMASI'" ;
		$hasil	= mysqli_query($db, $sql);
		$jumlah	= mysqli_num_rows($hasil);
        echo $jumlah;
}
?>

<div class="container p-2">
            <div class="col-sm-4">
                <form action="index.php" method="POST">
                    <input type="number" class="form-control"  name="cek">
                    <br>
                    <button class="btn btn-primary" type="submit">Cek Data</button>
                </form> 
                <?php
                    include 'koneksi.php';
                    $cek    = $_POST['cek'];
                    switch ($cek) {
                        case 1; // Menggunakan semi colon
                            $sql    = "SELECT * FROM mahasiswa" ;
                            $hasil  = mysqli_query($db, $sql);
                            $jumlah = mysqli_num_rows($hasil);
                            echo "<label>Hasil : $jumlah Data</label> ";
                            break;
                        case 2; // Menggunakan semi colon
                            $sql    = "SELECT * FROM mahasiswa where progdi = 'TEKNIK INFORMATIKA'" ;
                            $hasil  = mysqli_query($db, $sql);
                            $jumlah = mysqli_num_rows($hasil);
                            echo "<label>Hasil : $jumlah Data</label> ";
                            break;
                        default:
                            $sql    = "SELECT * FROM mahasiswa where progdi = 'SISTEM INFORMASI'" ;
                            $hasil  = mysqli_query($db, $sql);
                            $jumlah = mysqli_num_rows($hasil);
                            echo "<label>Hasil : $jumlah Data</label> ";
                    }
                    ?>
            </div>
        </div>

