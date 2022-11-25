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
                        <a class="nav-link" href="kelas.php">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profil.php">Profil</a>
                    </li>
                </ul>
                <a href="logout.php" class="nav-link logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="card table-kelas mt-4" style="width:70%">
    <h3 class="kelas">PROFIL</h3>
        <table class="table" width="500">
        <tr>
            <th></th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>Ket</th>
        </tr>
        <tr>
            <td><img src="img/profil.png" alt="foto profil" width="100" height="140"></td>
            <td>Nabraska Amarilys Sholikhah</td>
            <td>21.12.1852</td>
            <td>21-SI-01</td>
            <td>Pemrograman Web Lanjut</td>
            <td>Tugas UTS</td>
        </tr>
        </table> 
        <a class="btn btn-primary border-0" href="home.php" role="button">Kembali</a>
    </div>
    </body>
</html>