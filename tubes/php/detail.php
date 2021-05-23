<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
  <html>
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css">
      <link rel="stylesheet" href="../materialize/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--My Css -->
    <link rel="stylesheet" href="">

</head>
<title>Detail</title>
    <body>

    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="purple darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="./detail.php" class="brand-logo">Online Shop Happy</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registrasi.php">Registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="login.php">Login</a></li>
        <li><a href="registrasi.php">Registrasi</a></li>
    </ul>

    <div class="container">
        <div class="section">
            <div class="row">

            <div class="card">
                <a href="detail.php?id=<?= $buku['id']; ?>"></a>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="../assets/img/<?= $buku['gambar']; ?>" class="responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card-content">
                        <p style="text-align:left;">Judul : <?= $buku['judul']; ?></p>
                        <br>
                        <p style="text-align:left;">Penulis : <?= $buku['penulis']; ?></p>
                        <br>
                        <p style="text-align:left;">Stok : <?= $buku['stok']; ?></p>
                        <br>
                        <p style="text-align:left;">Categori : <?= $buku['categori']; ?></p>
                        <br>
                        <p style="text-align:left;">Harga : <?= $buku['harga']; ?></p>
                        <br> <br>
                        <div class="col m4 s12">
                            <div class="center">
                                <i class="material-icons medium">cached</i>
                            </div>
                            <div class="center">
                                <a href="#" class="center medium">10 Hari <br> Penggantian</a>
                            </div>
                        </div>

                        <div class="col m4 s12">
                            <div class="center">
                                    <i class="material-icons medium">local_shipping</i>
                            </div>
                            <div class="center">
                                    <a href="#" class="center medium">Pengiriman <br> Cepat</a>
                            </div>                    
                        </div>
                        <div class="col m4 s12">
                        <div class="center">
                                <i class="material-icons medium">done_all</i>
                            </div>
                            <div class="center">
                                <a href="#" class="center medium">1 Tahun <br> Garansi</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <h2 class="center">Sinopsis</h2>
        <div class="row">
            <div class="col s12">
                <p style="text-align:left;"><?= $buku['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container center">
        <a href="../index.php" class="waves-effect waves-light btn-large">Kembali</a>
        <a href="#" class="waves-effect waves-light btn-large">Beli</a>
    </div>
    <br>
    <br><br>
    <br>

<!---Footer--->
<?php
    // include footer.php file
    include ('../footer.php');
?>
    
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize/js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--My Javascript-->
<script src="javascript.js"></script>


    </body>      
    </body>