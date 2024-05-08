<?php 

$conn = mysqli_connect("localhost","root","","viko");
if(isset($_POST["submit"])) {
    $nama = $_POST["NAMA"];
    $alamat = $_POST["ALAMAT"];
    $hobi = $_POST["HOBI"];
    $no_hp = $_POST["NO"];

   $query = "INSERT INTO data
                VALUES ('','$nama', '$alamat', '$hobi', '$no_hp')";
    mysqli_query($conn,$query);
    header('Location:tugasweb.php');

    // cek 
    if(mysqli_affected_rows($conn)>0){
        echo "Berhasil";
    }else {
        echo "Gagal";
        echo "<br>";
        echo mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="https://upload.wikimedia.org/wikipedia/id/6/6d/Logo_Unsoed.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Universitas Jenderal Soedirman
          </a>
          
        </div>
    </nav><br>
    <h1>Tambah Data</h1>

    
    <form class="row g-3" method="post">
  <div class="col-md-6">
    <label for="NAMA" class="form-label">NAMA</label>
    <input type="text" name="NAMA" class="form-control" id="NAMA">
  </div>
  <div class="col-md-6">
    <label for="ALAMAT" class="form-label">ALAMAT</label>
    <input type="text" name="ALAMAT"class="form-control" id="ALAMAT">
  </div>
  <div class="col-12">
    <label for="HOBI" class="form-label">TEMPAT TANGGAL LAHIR</label>
    <input type="text" name="HOBI" class="form-control" id="HOBI" placeholder="">
  </div>
  <div class="col-12">
    <label for="NO" class="form-label">KONTAK</label>
    <input type="no_hp" name="NO" class="form-control" id="NO" placeholder="">
  </div>
        <button type="submit" name="submit" class="btn btn-primary">LANJUT</button></button>
</body>
</html>