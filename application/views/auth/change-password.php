<div class="login">
    <div class="left">
        <div class="logo">
            <img src="<?php echo base_url('assets/') ?>img/20525729-removebg-preview.png" alt="" class="main-logo">
            <h3 class="text-logo">SMPN 1 <br><span>GLENMORE</span></h3>
        </div>

        <?= $this->session->flashdata('message') ?>

        <div class="form">
            <form method="POST" action="<?php echo base_url('auth/changepassword') ?>">
                <h3 class="title">Change Password for</h3>
                <h5 class="desk-reset"><?= $this->session->userdata('reset_email') ?></h5>
                <input type="password" class="input-form" placeholder="Type New Password" id="password1" name="password1">
                <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                <input type="password" class="input-form" placeholder="Repeat Password" id="password2" name="password2">
                <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                <button class="btn" type="submit">Change Password</button>
            </form>
        </div>
    </div>
    <div class="line"></div>
    <div class="right">
        <img src="<?php echo base_url('assets/') ?>img/wave.png" alt="" class="wave">
        <img src="<?php echo base_url('assets/') ?>img/bg-login.png" class="banner-image">
    </div>
</div>


</body>

</html>