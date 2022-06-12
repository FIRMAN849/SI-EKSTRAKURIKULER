<div class="login">
    <div class="left">
        <div class="logo">
            <img src="<?php echo base_url('assets/') ?>img/sma-1-lumajang.png" alt="" class="main-logo">
            <h3 class="text-logo">SMAN 1 <br><span>LUMAJANG</span></h3>
        </div>

        <?= $this->session->flashdata('message') ?>

        <div class="form">
            <form action="" method="POST" action="<?php echo base_url('auth') ?>">
                <h3 class="title">Login</h3>
                <input type="text" class="input-form" placeholder="Type Your Nisn" id="nisn" name="nisn" value="<?php echo set_value('nisn'); ?>">
                <?php echo form_error('nisn', '<small class="text-danger pl-3">', '</small>') ?>
                <input type="password" class="input-form" placeholder="Password" id="password" name="password">
                <button class="btn" type="submit">Login</button>
            </form>

        </div>
        <div class="forgot-password">
            <div class="form-group">
                <a href="<?php echo base_url('auth/registration') ?>" class="forgot">Create Account</a>
            </div>
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