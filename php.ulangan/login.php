<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.min.css" />
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>justify-content-left
  </div>
</nav>
<!-- End Header -->
<!--  Content -->
<div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="padding:20px;">
                    <div class="card">
                        <div class="card-header">ulangan</div>
                            <div class="card-body">
<?php
session_start();
if (isset($_POST['login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "anyasari@gamail.com" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "Selamat datang ditoko  <a href='selamatdatang.php'> Klik</a> Supaya Bisa Masuk Home";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Selamat datang</title>
    </head>

    <body> 
        <nav>
        </nav>
        <form action="" method="post">
            <center><h2>Selamat datang</h2></center>
            <center>Username : <input type="text" name="user"><br></center>
            <center>Password : <input type="password" name="pass"><br></center>
            <center><input type="submit" name="Login" value="Log In"></center>
        </form>
    </body>

    </html>
<?php
}
?>
