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

    <div class="info-profil">
        <div class="container-fluid">
            <form action="<?php echo base_url('user/editprofil'); ?>" method="POST" enctype="multipart/form-data">
                <div class="profil">
                    <div class="profil-left">
                        <div class="title-profil">
                            <p>Edit Profile</p>
                        </div>

                        <img src="<?php echo base_url('assets/img/profil/') . $user['image']; ?>" alt="" class="icon-profil">
                        <div class="btn-upload-profil">
                            <div class="mr-3">
                                <input type="file" id="image" name="image" for="image">
                            </div>
                        </div>
                    </div>
                    <div class="edit-profil-right">
                        <input type="text" class="input-form" id="nama" name="nama" value="<?php echo $user['nama']; ?>">
                        <input type="text" class="input-form" id="nisn" name="nisn" value="<?php echo $user['nisn']; ?>" readonly>
                        <input type="text" class="input-form" id="email" name="email" value="<?php echo $user['email']; ?>">
                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        <input type="text" class="input-form" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>">
                        <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        <input type="date" class="input-form" id="tgl_lahir" name="tgl_lahir" value="<?php echo $user['tgl_lahir']; ?>">
                        <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                        <select id="kelas" name="kelas" class="input-form">
                            <option value="">Kelas</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                        </select>
                        <?php echo form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                        <select id="rombongan" name="rombongan" class="input-form">
                            <option value="">Rombongan</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <?php echo form_error('rombongan', '<small class="text-danger pl-3">', '</small>') ?>
                        <button type="submit" class="btn">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>



    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>