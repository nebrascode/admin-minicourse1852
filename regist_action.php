<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>regist</title>
</head>
<body>
    <?php 
    include("config.php");
    $name=$_POST["fullname"];
    $user=$_POST["usernama"];
    $email=$_POST["email"];
    $pass=$_POST["password"];

    $sql="insert into user (id_user, fullname, usernama, email, password) values ('', '$name', '$user', '$email', '$pass');";

    $hasil=mysqli_query($config, $sql);

    if ($hasil){?>
    <div class="card form-card">
        <h3>Berhasil!</h3>
        <p>Login terlebih dahulu</p>
        <a href="index.php">Login</a>
    </div>
        
    <?php }
    else{?>
       <h3>Gagal!</h3>
       <p>Slahkan ulangi registrasi</p>
       <a href="regist.php">Ulangi</a>
    <?php }
    ?>
</body>
</html>