<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tugas1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LIPMATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto"></div>
            <form action="tugasuts.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang</h1>
                    <p class="lead">Disiini kami menyediakan lipmate berbagai macam</p> <p class="lead"></p>
                    <hr class="my-4">
                    <p>Jika kalian suka klik tombol login</p>
                </div>
            </div>
        </div>
    </div>
  
    <!-- End Footer -->
    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>
<?php
    if (isset($_SESSION['akseslogin'])) {
        echo "<script> alert('Terimakasih anda telah Login');"." window.location.href='tugasuts.php' </script>";
    }
?>