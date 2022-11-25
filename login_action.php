<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    include("config.php");
    
    $username=$_POST["usernama"];
    $pass=$_POST["password"];

    $sql="select usernama from user
    where usernama='$username'
    and password = '$pass'";

    $hasil = mysqli_query($config, $sql) or exit("error query : <b>".$sql."</b>");

    if (mysqli_num_rows($hasil)>0) {
        $data=mysqli_fetch_array($hasil);
        $_SESSION["username"]= $data["usernama"]; //session bikin nama baru (["username"])
        header("Location:home.php");
        exit();
    } else { ?>
    <div>
    <h2>Maaf...</h2>
       <p>Username atau Password salah. Klik <a href="login.php">disini </a>untuk kembali login</p> <?php 
    }
    ?>
    </div>
</body>
</html>

       
