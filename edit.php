<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Halaman Edit</title>
</head>
<body>
    <?php 
    include 'config.php';
    $id = $_GET['id_class'];
    $sql = "SELECT * FROM kelas WHERE id_class='$id'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>
    <div class="card card-kelas mt-5 ml-auto mr-auto" style="width:50% ;  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
        <h3>Edit Kelas</h3>
        <form method="POST" action="edit_action.php" 
        enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Kode Kelas</td>
                    <td>:</td>
                    <td>
                    <input type="text" name="id_class"
                    value="<?php echo 
                    $data['id_class']?>"readonly></td>
                </tr>
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td>
                    <input type="text" name="classname"
                    value="<?php echo 
                    $data['classname']?>"readonly></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><textarea name="deskripsi"><?php echo 
                    $data['deskripsi']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td><div class="form-check">
                        <label><input type="radio" name="jenis" value="Gratis" <?php if($data['jenis']=='Gratis') echo 'checked'?>>Gratis</label>
                        <label><input type="radio" name="jenis" value="Berbayar" <?php if($data['jenis']=='Berbayar') echo 'checked'?>>Berbayar</label>
                        </div></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                    <input type="text" name="harga"
                    value="<?php echo 
                    $data['harga']?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Diubah</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_ditambah"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><input type="file" name="gambar"> </td>
                </tr>
            </table>
            <input class="btn btn-primary btn-tambah mt-3" type="submit" value="Simpan" style="background-color: #C080D8; border-style:none"> 
            <input class="btn btn-secondary mt-3" type="reset" value="Reset">
        </form>
    </div>
</body>
</html>
