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
    </form>
  </div>
</nav>
<!-- End Header -->
<!--  Content -->
<div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="padding:20px;">
                    <div class="card">
                        <div class="card-header">TUGAS</div>
                            <div class="card-body">
                       <form action="isi1.php" method="POST">
                        <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <input type="text" name="kelas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="radio" name="jenis" value="laki-laki">Laki-laki
                                    <input type="radio" name="jenis" value="perempuan" checked>perempuan 
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Harian</label>
                                    <input type="text" name="nilaihar" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai UTS</label>
                                    <input type="text" name="nilaiut" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai UAS</label>
                                    <input type="text" name="nilaias" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                </div>
                                </form>
                         </div>
                     </div>
                  </div>
               <div class="col-md-6" style="padding:20px;">
                    <div class="table-reponsive">
                    <table class="table">
                    <tr>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>Jenis</th>
                            <th>Nilai Harian</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Status</th>
                    </tr>
                    <!-- php -->
                    <?php
                    if(isset($_POST['simpan'])){
                        $a=$_POST['nama'];
                        $b=$_POST['kelas'];
                        $c=$_POST['jenis'];
                        $d=$_POST['nilaihar'];
                        $e=$_POST['nilaiut'];
                        $f=$_POST['nilaias'];
                        $g=$_POST['status'];
                    ?>
                    <!-- end php --> 
                    <tr>
                        <td><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><?php echo $f; ?></td>
                        <td><?php echo $g; ?></td>
                    </tr>
                    <?php } ?>
                    </table>
                       </div>
                     </div>
                   </div>
                 </div>   
              </div>
                    