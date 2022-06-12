<div class="register">
    <div class="title">
        <h1>Create Accoount</h1>
    </div>
    <form action="" method="post" action="<?php echo base_url('auth/registration') ?>">
        <div class="form-register">
            <div class="left">
                <input type="text" class="input-form mt-2" placeholder="Nama" name="nama" id="nama" value="<?= set_value('name') ?>">
                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>

                <input type="text" class="input-form" placeholder="Nisn" id="nisn" name="nisn" value="<?= set_value('nisn') ?>">
                <?php echo form_error('nisn', '<small class="text-danger pl-3">', '</small>') ?>

                <input type="text" class="input-form" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>">
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>') ?>

                <input type="text" class="input-form" placeholder="alamat" id="alamat" name="alamat" value="<?= set_value('alamat') ?>">
                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>

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
                <div class="password">
                    <input type="password" class="input-form mr-3" placeholder="Password" id="password1" name="password1">

                    <input type="password" class="input-form ml-3" placeholder="Repeat Password" id="password2" name="password2">
                </div>
                <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>
        <button class="btn" type="submit">Register Account</button>
    </form>
    <div class="decision">
        <a href="<?php echo base_url('auth') ?>" class="">Already Account</a>
    </div>
    <img src="<?php echo base_url('assets/') ?>img/wave.png" alt="" class="wave">
</div>