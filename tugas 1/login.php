<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
  font-family: sans-serif;
  background-color: #fff;
}

.container {
  width: 500px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  font-size: 20px;
}

form {
  margin-top: 20px;
  border: 1px solid #ccc;
  padding: 20px;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

input[type="text"] {
  border-radius: 5px;
}

input[type="password"] {
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #000;
  color: #fff;
  padding: 10px;
  cursor: pointer;
  border-radius: 5px;
}
  </style>
</head>
<body>
    

  <div class="container">
    <h1>Login</h1>

    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>

    <?php
    if (!isset($_SESSION['isLogin'])) {
      echo "<p>Silahkan login terlebih dahulu.</p>";
    }
    ?>
  </div>

</body>
</html>

<?php
// Proses login
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cek username dan password
  if ($username == "admin" && $password == "123456") {
    // Login berhasil
    $_SESSION['isLogin'] = true;
    header("Location: index.php");
  } else {
    // Login gagal
    echo "<p>Username atau password salah.</p>";
  }
}
?>
