<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>admin-kelas</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid navbar">
            <div class="nav-icon">
                <a class="navbar-brand" href="#">
                    <img src="img/icon.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-center mr-3 ml-2">
                </a>
                <a class="navbar-brand" href="#">minicourse_1852</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kelas.php">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                </ul>
                <a href="logout.php" class="nav-link logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="card table-kelas mt-4" style="width:70%">
    <h3 class="kelas">DAFTAR KELAS</h3>
        <table class="table" width="500">
        <tr>
            <th width="30">No.</th>
            <th></th>
            <th>kode kelas</th>
            <th>nama kelas</th>
            <th>deskripsi</th>
            <th>jenis</th>
            <th>harga</th>
            <th>tanggal update</th>
            <th>Kelola</th>
        </tr>
        <?php 
        include "config.php";

        $sql="SELECT *from kelas";
        $hasil=mysqli_query($config, $sql);
        $no=1;
            while ($data=mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><img src="<?php echo $data['gambar']?>" width="100" height="70"></td>
            <td><?php echo $data['id_class'];?></td>
            <td><?php echo $data['classname'];?></td>
            <td><?php echo $data['deskripsi'];?></td>
            <td><?php echo $data['jenis'];?></td>
            <td><?php echo $data['harga'];?></td>
            <td><?php echo $data['tgl_ditambah'];?></td>
            <td>
                <a href="edit.php?id_class=<?php echo $data['id_class'];?> ">Edit</a> | <a href="hapus.php?id_class=<?php echo $data['id_class'];?> ">Hapus</a> 
            </td> 
        </tr>
        <?php 
            $no++;
            }?>
        </table> 
        <a class="btn btn-primary border-0" href="tambah_kelas.php" role="button"> +tambah kelas</a>
    </div>
    </body>
</html>