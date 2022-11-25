<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Halaman Registrasi</title>
</head>
<body>
<div class="card form-card justify-contet-center mt-5">
    <div class="form" >
        <h3>Buat akun</h3>
        <form action="regist_action.php" method="post" class="justify-content-center">
        <input type="text" placeholder="nama lengkap" name="fullname"> <br>
            <input type="text" placeholder="username" name="usernama"> <br>
            <input type="email" placeholder="email" name="email"> <br>
            <input type="password" placeholder="password" name="password"><br>
            <input type="password" placeholder="konfirmasi password" name="password"> <br>
            <button type="submit" name="daftar" class="btn-login mr-auto ml-auto">Daftar</button>
      </form>
    </div>
  </div>
</body>
</html>