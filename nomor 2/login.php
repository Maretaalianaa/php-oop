<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- css internal -->
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
    <!-- Menentukan aksi formulir ke file login.php dan metode pengirimannya adalah POST --> 
    <form action="login.php" method="post">
      <!-- Menambahkan input teks untuk username. -->
      <input type="text" name="username" placeholder="Username"> 
      <!-- Menambahkan input password untuk password. -->
      <input type="password" name="password" placeholder="Password">
      <!-- Menambahkan tombol submit dengan label "Login". -->
      <input type="submit" value="Login">
    </form>

    <?php
    // Menampilkan pesan "Silahkan login terlebih dahulu." jika session isLogin tidak ada.
    if (!isset($_SESSION['isLogin'])) {
      echo "<p>Silahkan login terlebih dahulu.</p>";
    }
    ?>
  </div>

</body>
</html>

<?php
// Menjalankan proses login jika username dan password yang dimasukkan pengguna benar.
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
