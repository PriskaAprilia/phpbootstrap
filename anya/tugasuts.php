<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tugas 1</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LIPMATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            </form>
        
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                    <h1 class="display-4">Silakan Login!</h1>
                    <p class="lead">Untuk Mengetahui Info Selengkapnya</p>
                    <hr class="my-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="" id="email" required>
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" value="" id="pass" required><br><br>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="Akses">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <!-- End Footer -->

    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="Assets/js/jquery-3.4.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>
<?php
    if (isset($_POST['Akses'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a == "anya@gmail.com" && $b == '1234567') {
            $_SESSION['akseslogin'] = 'Admin';
            header("location:tugasutstugas1.php");
        }else{
            echo "Login Gagal";
        }
    }elseif (isset($_SESSION['akseslogin'])) {
         echo "<script> alert('Anda Sudah Login');"." window.location.href='tugasutstugas1.php' </script>";
    }
?>