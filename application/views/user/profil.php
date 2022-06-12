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

    <!--content-->
    <div class="info-profil">
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>
            <div class="profil">
                <div class="profil-left">
                    <div class="title-profil">
                        <p>Profile</p>
                    </div>
                    <img src="<?php echo base_url('assets/img/profil/') . $user['image']; ?>" alt="" class="icon-profil">
                </div>
                <div class="profil-right">
                    <table class="form-data">
                        <tr>
                            <td>Nama</td>
                            <td class="pd-6"><?php echo $user['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Nisn</td>
                            <td class="pd-6"><?php echo $user['nisn'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="pd-6"><?php echo $user['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td class="pd-6"><?php echo $user['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td class="pd-6"><?php echo $user['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Rombongan</td>
                            <td class="pd-6"><?php echo $user['rombongan'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td class="pd-6"><?php echo $user['alamat'] ?></td>
                        </tr>
                    </table>
                    <div class="btn-edit-profil">
                        <a href="<?php echo base_url('user/editprofil'); ?>" class="btn-warning">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end content-->

    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>