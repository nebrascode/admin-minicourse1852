<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Action Login</title>
</head>
<body>
<?php 
    session_start();?>
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
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kelas.php">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                </ul>
                <a href="logout.php" class="nav-link logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="halo">
        <h3>Halo, <?php echo $_SESSION['username'];?></h3>
    </div>
    <div class="card card-konten col-lg-8 content-center">
        <h2>Pelajari dan Kembangkan Skill Baru</h2>
        <img src="img/banner.png" alt="banner">
        <p>Pelajari dan kembangkan skill yang kamu minati dengan mengikuti kelas yang tersedia disini.
        Jangan lewatkan berbagai promo untuk mendapatkan kelas premium</p>
        <a class="btn btn-primary border-0" href="kelas.php" role="button">Lihat Kelas</a>
    </div> 
</body>
</html>