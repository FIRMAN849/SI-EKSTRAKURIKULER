<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css">
</head>

<body>

    <header class="shadow-sm sticky-top">
        <div class="container">
            <nav class="nav">
                <div class="nav-logo">
                    <img src="<?php echo base_url('assets/') ?>img/sma-1-lumajang.png" alt="" class="main-logo">
                    <h3 class="text-logo">SMAN 1 <br><span>LUMAJANG</span></h3>
                </div>
                <div class="nav-toggle" id="nav-toggle">
                    <i class='fas fa-bars'></i>
                </div>
                <div class="nav-menu" id="nav-menu">
                    <div class="nav-close" id="nav-close">
                        <i class='fas fa-times'></i>
                    </div>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="<?php echo base_url('user/index'); ?>" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('user/about'); ?>" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('user/galeri'); ?>" class="nav-link">Galery</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('user/daftarekskul'); ?>" class="nav-link">Daftar Ekstrakurikuler</a></li>
                        <div class="nav-profil">
                            <div class="dropdown-profil">
                                <div class="nav-data">
                                    <img src="<?php echo base_url('assets/img/profil/') . $user['image']; ?>" alt="" class="icon-user">
                                    <p class="name-user"><?php echo $user['nama'] ?> <i class="fas fa-angle-down"></i></p>
                                </div>
                                <div class="dropdown-content-profil">
                                    <a href="<?php echo base_url('user/profil'); ?>">Profile</a> <br>
                                    <a href="<?php echo base_url('user/editprofil'); ?>">Edit Profil</a> <br>
                                    <a href="<?php echo base_url('user/ubahpassword'); ?>">Ubah Password</a> <br>
                                    <a href="<?php echo base_url('auth/logout'); ?>">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>

    </header>


    <div class="main-content">
        <div class="container">
            <div class="title-content">
                <p>Galery Ekstrakurikuler</p>
            </div>
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/62267057_2346090378968265_749291710552935238_n.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/66449215_2342412052518663_2900703318979076255_n.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/13257032_1625407477684218_1926190430_n.jpg" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>

                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content achievment-->
    <div class="achievment">
        <div class="container">
            <div class="title-achievment">
                <p class="center">Achievment</p>
            </div>
            <div class="card-box">
                <div class="card">
                    <div class="front">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/20398465_1927714524162912_7765378975148277760_n.jpg" alt="">
                    </div>
                    <div class="back">
                        <h1>Basket</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="" class="btn-red">Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="front">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/62204077_2218601348193132_5996675947958918449_n.jpg" alt="">
                    </div>
                    <div class="back">
                        <h1>Sepakbola</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="" class="btn-red">Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="front">
                        <img src="<?php echo base_url('assets/') ?>img/ekskul/18298927_415956398765900_67558955097784320_n.jpg" alt="">
                    </div>
                    <div class="back">
                        <h1>Futsal</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="" class="btn-red">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Footer-->
    <footer>
        <ul>
            <li>
                <p><i class="fab fa-facebook-f"> </i> SMAN 1 LUMAJANG</p>
            </li>
            <li>
                <p><i class="fab fa-instagram"> </i> sman1lumajang</p>
            </li>
            <li>
                <p><i class="fab fa-youtube"> </i> SMAN 1 LUMAJANG</p>
            </li>
            <li>
                <p><i class="fas fa-phone-alt"> </i> 0334-881747</p>
            </li>
        </ul>
    </footer>

    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>