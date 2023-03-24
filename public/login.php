<?php 
$konek = mysqli_connect("localhost", "root", "", "websensor");
 if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result=mysqli_query($konek, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <h1>Halaman Login</h1>
   <?php if(isset($error)) :?> 
    <p style="color:red; font-style:italic;">Username / Password salah</p>
    <?php endif; ?>

   <form action="" method="post">
    <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username" autocomplete="off" />
          <a href="#home" class="block font-bold text-lg text-emerald-500 py-4">ProjectIOT</a>
        </li>
        <li>
          <label for="password">password :</label>
          <input type="password" name="password" id="password" autocomplete="off" />
        </li>
        <li>
            <button type="submit" name="login" class="">Login</button>
        </li>
    </ul>
   </form>
</body>
</html>