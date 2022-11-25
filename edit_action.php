<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>edit-action</title>
</head>
<body>
<?php 
session_start();
include "config.php";
$kode=$_POST["id_class"];
$nama=$_POST["classname"];
$desk=$_POST["deskripsi"];
$hrg=$_POST["harga"];
$jns=$_POST["jenis"];
$tgl=$_POST["tgl_ditambah"];

$lokasifile = $_FILES["gambar"]["tmp_name"];
$namafile = $_FILES["gambar"]["name"];

$uploaddir = "uploads/";
$uploadfile = $uploaddir.$namafile;
$sql="update kelas set id_class='$kode',
classname='$nama',
gambar='$uploadfile',
deskripsi='$desk',
harga='$hrg',
tgl_ditambah='$tgl',
jenis='$jns' where id_class='$kode'";

$hasil = mysqli_query($config, $sql);

if($hasil){
    ?>
    <div class="card form-card">
        <h3>Berhasil!</h3>
        <p>Kelas berhasil diubah</p>
        <a href="kelas.php">Lihat</a>
    </div>
        
    <?php }
    else{?>
       <h3>Gagal!</h3>
       <p>Slahkan ulangi</p>
       <a href="edit.php">Ulangi</a>
    <?php
}
?> 
</body>
</html>

