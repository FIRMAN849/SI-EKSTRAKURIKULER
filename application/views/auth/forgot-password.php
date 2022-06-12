<div class="login">
    <div class="left">
        <div class="logo">
            <img src="<?php echo base_url('assets/') ?>img/20525729-removebg-preview.png" alt="" class="main-logo">
            <h3 class="text-logo">SMPN 1 <br><span>GLENMORE</span></h3>
        </div>

        <?= $this->session->flashdata('message') ?>

        <div class="form">
            <form method="POST" action="<?php echo base_url('auth/forgotpassword') ?>">
                <h3 class="title">Forgot Password</h3>
                <input type="text" class="input-form" placeholder="Type Your Email" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                <button class="btn" type="submit">Reset Password</button>
            </form>

        </div>
        <div class="forgot-password">
            <div class="form-group">
                <a href="<?php echo base_url('auth') ?>" class="forgot">Back to Login</a>
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