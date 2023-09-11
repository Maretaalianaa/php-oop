<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Create</title>
<!-- style css internal -->
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

p.success {
  text-align: center;
  font-size: 18px;
  color: #000;
  background-color: #ccc;
  padding: 10px;
} 
  </style>
</head>
<body>

  <div class="container">
    <h1>Create</h1>
    
    <form action="create.php" method="post">
      <!-- Menambahkan input teks untuk nama. -->
      <input type="text" name="nama" placeholder="Nama">
      <!-- Menambahkan input teks untuk npm. -->
      <input type="text" name="npm" placeholder="NPM">
      <!-- Menambahkan input teks untuk jurusan. -->
      <input type="text" name="jurusan" placeholder="Jurusan">
      <!-- Menambahkan tombol submit dengan label "Create". -->
      <input type="submit" value="Create">
    </form>

    <?php
    // Menjalankan proses create jika semua input terisi.
    if (isset($_POST['nama']) && isset($_POST['npm']) && isset($_POST['jurusan'])) {
      $nama = $_POST['nama'];
      $npm = $_POST['npm'];
      $jurusan = $_POST['jurusan'];

      // Menjalankan proses create jika semua input terisi.
      // Tampilkan pesan berhasil
      echo "<p>Data berhasil dibuat.</p>";
    }
    ?>
  </div>

</body>
</html>
