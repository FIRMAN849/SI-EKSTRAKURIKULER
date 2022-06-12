<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/register.css">
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


    <div class="daftar-ekskul">
        <div class="title">
            <h1>Daftar Ekstrakurikuler</h1>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <form method="post" action="<?php echo base_url('user/daftarekskul') ?>">
            <div class="form-daftar">
                <div class="left">
                    <input type="text" class="input-form mt-2" placeholder="Nama" name="nama" id="nama" value="<?= set_value('nama') ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>

                    <input type="text" class="input-form" placeholder="Nisn" id="nisn" name="nisn" value="<?= set_value('nisn') ?>">
                    <?php echo form_error('nisn', '<small class="text-danger pl-3">', '</small>') ?>

                    <input type="tel" class="input-form" placeholder="No Whatsapp" id="no_wa" name="no_wa" value="<?= set_value('no_wa') ?>">
                    <?php echo form_error('no_wa', '<small class="text-danger pl-3">', '</small>') ?>

                    <select id="jenis_kelamin" name="jenis_kelamin" class="input-form" value="<?= set_value('jenis_kelamin') ?>">
                        <option value="">jenis kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <?php echo form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>

                    <input type="text" class="input-form" placeholder="alamat" id="alamat" name="alamat" value="<?= set_value('alamat') ?>">
                    <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>

                    <select id="ekskul" name="ekskul" class="input-form" value="<?= set_value('ekskul') ?>">
                        <option value="">Pilih Ekstrakurikuler</option>
                        <?php foreach ($kategori_ekskul as $kekskul) : ?>
                            <option value="<?php echo $kekskul->id ?>"><?php echo $kekskul->nama_ekskul; ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php echo form_error('ekskul', '<small class="text-danger pl-3">', '</small>') ?>

                </div>

                <div class="right ml-3">
                    <input type="date" class="input-form" placeholder="Tanggal Lahir" id="tgl-lahir" name="tgl-lahir" value="<?= set_value('tgl-lahir') ?>">
                    <?php echo form_error('tgl-lahir', '<small class="text-danger pl-3">', '</small>') ?>
                    <select id="kelas" name="kelas" class="input-form" id="kelas" name="kelas" value="<?= set_value('kelas') ?>">
                        <option value="">Kelas</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option>
                    </select>
                    <?php echo form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                    <select id="rombongan" name="rombongan" class="input-form" id="rombongan" name="rombongan" value="<?= set_value('rombongan') ?>">
                        <option value="">Rombongan</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <?php echo form_error('rombongan', '<small class="text-danger pl-3">', '</small>') ?>

                    <textarea name="alasan" id="alasan" placeholder="Ketik Alasan" class="input-form alasan" rows="7" cols="70"></textarea>
                    <?php echo form_error('alasan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <button class="btn" type="submit">Daftar</button>
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>

</html>