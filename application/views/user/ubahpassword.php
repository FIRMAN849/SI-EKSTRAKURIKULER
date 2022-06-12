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

    <div class="ubah-password">


        <div class="container">
            <form action="<?php echo base_url('user/ubahpassword') ?>" method="post">
                <div class="form-ubah">
                    <?= $this->session->flashdata('message'); ?>
                    <p>Password Lama</p>
                    <input type="password" class="input-form" id="password_lama" name="password_lama">
                    <?php echo form_error('password_lama', '<small class="text-danger pl-3">', '</small>') ?>
                    <p>Password Baru</p>
                    <input type="password" class="input-form" id="password_baru1" name="password_baru1">
                    <?php echo form_error('password_baru1', '<small class="text-danger pl-3">', '</small>') ?>
                    <p>Repeat Password</p>
                    <input type="password" class="input-form" id="password_baru2" name="password_baru2">
                    <?php echo form_error('password_baru2', '<small class="text-danger pl-3">', '</small>') ?>
                    <button type="submit" class="btn-danger">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>



    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>