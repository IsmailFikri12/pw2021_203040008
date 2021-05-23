<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->


<?php 
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.css" media="screen,projection" />

    <!--My CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

    <title>Shop</title>

    <body>

    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="purple darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Online Shop</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="php/login.php">Login</a></li>
                        <li><a href="php/registrasi.php">Registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="php/login.php">Login</a></li>
        <li><a href="php/registrasi.php">Registrasi</a></li>
    </ul>
    
     <!--Slider-->
     <div class="slider scrollspy">
        <ul class="slides">
            <li>
            <img src="assets/slider/Banner1.jpg">
                <div class="caption center-align">
                    <h3 class="white-text">Books are a source of knowledge</h3>
                    <h5 class="white-text text-lighten-3">"Buku adalah sumber ilmu terbaik bagi siapa pun yang membacanya."</h5>
                </div>
            </li>
            <li>
            <img src="assets/slider/Banner2.jpg">
                <div class="caption center-align">
                    <h3 class="white-text">Books are the most loyal friends</h3>
                    <h5 class="white-text text-lighten-3">Buku adalah sahabat paling setia rela mendampingi di mana pun dan kapan pun tanpa pernah memikirkan dirinya. Sebaik-baik teman sepanjang zaman adalah buku."</h5>
                </div>
            </li>
            <li>
            <img src="assets/slider/Banner3.jpg">
                <div class="caption center-align">
                    <h3 class="white-text">Old books are new books for those new readers</h3>
                    <h5 class="white-text text-lighten-3">Buku lama adalah buku baru bagi mereka yang belum membacanya.</h5>
                </div>
            </li>
        </ul>
    </div>


 <section id="about" class="about scrollspy">
        <div class="container">
            <div class="about">
                <h3 class="center light grey-text text-darken-2">Product</h3>
                <div class="row">
                <?php foreach ($buku as $bk) :?>
                    <div class="col m3 s12">
                        <div class="card" style="width: 200px; height: 500px;">
                            <div class="card-image">
                                <img src="./assets/img/<?= $bk['gambar']; ?>" style="width: 500px; height: 300px" class="responsive-img materialboxed">
                            </div>
                            <br><br>
                            <div class="card-content">
                                <p style="text-align:center;"><?= $bk['judul']; ?></p>
                                <p style="text-align:center;"><?= $bk['penulis']; ?></p>
                                <p style="text-align:center;"><?= $bk['harga']; ?></p>
                                <br>
                                <button type="button" class="btn btn-secondary"><a href="php/detail.php?id=<?= $bk['id'] ?>" style="color: white; text-decoration: none; margin-left: 7px; margin-right: 10px; text-align: center;">Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div> 
    </section>

    <br>
    <br><br>
    <br>
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Person</h3>
            <div class="row">
                <div class="col m12 s12 center">
                    <div class="card-panel purple darken-4 center white-text">
                        <i class="material-icons medium">email</i>
                        <h5>Contact</h5>
                    </div>
                    <ul class="collection width-header">
                        <li class="collection-header">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">Online Shop Happy </li>
                        <li class="collection-item">203040008@mail.unpas.ac.id</li>
                        <li class="collection-item">Telp. 0838-9271-0617</li>
                        <li class="collection-item">Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153 </li>
                        <li class="collection-item">West Java, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

 <!---Footer--->
 <?php
    // include footer.php file
    include ('footer.php');
?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="./materialize/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--My Javascript-->
    <script src="javascript.js"></script>

    <!--  Scripts-->

    </body>
</html>
