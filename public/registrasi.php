<?php 
$konek = mysqli_connect("localhost", "root", "", "websensor");

function registrasi($data){
  global $konek;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($konek,$data["password"]);
  $password2 = mysqli_real_escape_string($konek,$data["password2"]);
  
  //cek username
  $result=mysqli_query($konek, "SELECT username FROM user WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)){
    echo "<script>
    alert('Username sudah terdaftar');
    </script>";
    return false;
  }

  //cek password
  if($password !== $password2){
    echo "<script>
    alert('Konfirmasi password tidak sesuai');
    </script>";
    return false;
  }
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambahkan ke database
  mysqli_query($konek, "INSERT INTO user values ('', '$username','$password')");
  return mysqli_affected_rows($konek);
}

if(isset($_POST["register"])){

  if(registrasi($_POST)>0){
    echo "<script>
    alert('User baru berhasil ditambahkan');
    </script>";
  } else{
    echo mysqli_error($konek);
  }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <style>
      label{
        display: block;
      }
    </style>
  </head>
  <body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username" autocomplete="off" />
        </li>
        <li>
          <label for="password">Password :</label>
          <input type="password" name="password" id="password" />
        </li>
        <li>
          <label for="password2">Konfirmasi Password :</label>
          <input type="password" name="password2" id="password2" />
        </li>
        <li>
          <button type="submit" name="register">Register!</button>
        </li>
      </ul>
    </form>
  </body>
</html>
