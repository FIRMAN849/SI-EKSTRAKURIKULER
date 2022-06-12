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

    <div class="content-galery">
        <div class="container">
            <div class="top-galery">
                <div class="desk-galery">
                    <h1 class="title-galery">EKSTRAKURKULER <br> SEPAKBOLA</h1>
                    <p>Ekstrakurikuler Sepak Bola adalah salah satu ekstrakurikuler yang diminati oleh semua siswa.
                        Ekstrakurikuler sepak bola SMPN 1 GLENMORE telah menjuarai berbagai kompetisi lokal.
                    </p>
                    <a href="" class="btn-danger">Baca Selengkapnya</a>
                </div>
                <div class="galery-right">
                    <img src="<?php echo base_url('assets/') ?>img/ekskul/62267057_2346090378968265_749291710552935238_n.jpg">
                </div>
            </div>
        </div>
    </div>


    <div class="filter-galery">
        <div class="container">
            <div class="tabs-galery">
                <nav>
                    <div class="items">
                        <span class="item active" data-name="all">All</span>
                        <span class="item " data-name="sepak bola">Sepak Bola</span>
                        <span class="item " data-name="futsal">Futsal</span>
                        <span class="item " data-name="voly">Bola Voly</span>
                        <span class="item " data-name="basket">Basket</span>
                        <span class="item " data-name="pramuka">Pramuka</span>
                        <span class="item " data-name="pmr">Pmr</span>
                        <span class="item " data-name="silat">Pancak Silat</span>
                    </div>
                </nav>
                <div class="filter-image">
                    <div class="image" data-name="sepak bola">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/62174046_1855305364569094_7804347643442003593_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="futsal">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/18298927_415956398765900_67558955097784320_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="pramuka">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/66449215_2342412052518663_2900703318979076255_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="voly">
                        <span><img src="<?php echo base_url('assets/') ?>img/bg-voly.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="voly">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/65261729_394224967859424_6067228418048786170_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="pmr">
                        <span><img src="<?php echo base_url('assets/') ?>img/bg-pmr.jfif" alt=""></span>
                    </div>
                    <div class="image" data-name="basket">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/20482135_2004503066437492_6356489565867343872_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="basket">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/20398465_1927714524162912_7765378975148277760_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="pramuka">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/67527126_149003742880218_7305854532341710640_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="silat">
                        <span><img src="<?php echo base_url('assets/') ?>img/ekskul/13658909_1587971498166395_1350165733_n.jpg" alt=""></span>
                    </div>
                    <div class="image" data-name="futsal">
                        <span><img src="<?php echo base_url('assets/') ?>img/bg-futsal-2.jpg" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--fullscreen image preview-->
    <div class="preview-box">
        <div class="details">
            <span class="title-details">Image Category: <p>Not defined</p></span>
            <i class="fas fa-times"></i>
        </div>
        <div class="image-box">
            <img src="" alt="">
        </div>
    </div>
    <div class="shadow"></div>

    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>