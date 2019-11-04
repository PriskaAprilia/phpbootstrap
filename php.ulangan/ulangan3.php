    <?php
session_start();
if (isset($_SESSION['login'])) {
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Anya</title>
  </head>
  <body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Anya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="ulangan.php">Data Pembeli <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="logout.php">logout</a>
      <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
  </div>
</nav>                
        <div class="col-md-4" style="background:skyblue">
        </div>
    </div>
</div>
  </div>
`<div class="row">
    <div class="col-md-6" style="padding:20px;" style="background:skyblue">
        <center><h2>Data Pembeli</h2></center>
        <div class="table-responsive">
        <table class="table table-success">
        <?php
          if (isset($_POST['simpan'])) { ?>
          $nama = $_POST['nama'];
          $al = $_POST['alamat'];
          $jk = $_POST['jk'];
          $tgl = $_POST['tp'];
          $jm = $_POST['j'];
        
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">tanggal pembelian</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $nama; ?></td>
      <td><?php echo $al; ?></td>
      <td><?php echo $jk; ?></td>
      <td><?php echo $tgl; ?></td>
      <td><?php echo $jm; ?></td>
    </tr>
  </tbody>
  <br>
</table>
<?php } ?>
        </div>
    </div>
</div>`

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>
<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: lo.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>