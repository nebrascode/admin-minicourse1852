<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tambah kelas</title>
</head>
<body>
    <div class="card card-kelas mt-5 ml-auto mr-auto" style="width:50% ;  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
    <h3 class="kelas">Tambah Kelas</h3>
        <form action="tambah_kelas_action.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>kode kelas</td>
                    <td>:</td>
                    <td><input type="text" name="id_class" required></td>
                </tr>
                <tr>
                    <td>nama kelas</td>
                    <td>:</td>
                    <td><input type="text" name="classname" required></td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td>:</td>
                    <td><textarea name="deskripsi" required></textarea></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga" required></td>
                </tr>
                <tr>
                    <td>tgl update</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_ditambah" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelas</td>
                    <td>:</td>
                    <td><div class="form-check">
                    <label><input type="radio" name="jenis" value="Gratis">Gratis</label>
                    <label><input type="radio" name="jenis" value="Berbayar">Berbayar</label>
                    </div></td>
                </tr>
                <tr>
                    <td>gambar</td>
                    <td>:</td>
                    <td><input type="file" name="gambar" required></td>
                </tr>
            </table>
            <input class="btn btn-primary btn-tambah mt-3" type="submit" value="Submit" style="background-color: #C080D8; border-style:none"> 
            <input class="btn btn-secondary mt-3" type="reset" value="Reset">
        </form>
    </div>
   
</body>
</html>