<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk ke Jurnal.me</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url();?>assets/img/user.png" alt="">
                <form class="form-signin" action="<?php echo base_url();?>app/login" method="post" name="login">
                    
                    <input type="text" name="users_mail" value="<?php echo set_value('users_mail');?>" class="form-control" placeholder="Email" required autofocus>
                    <?php echo form_error('users_mail');?>
                    
                    <input type="password" name="users_pass" value="<?php echo set_value('users_pass');?>" class="form-control" placeholder="Password" required>
                    <?php echo form_error('users_pass');?>

                    <input type="hidden" name="users_role" value="user">
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="ingat-saya">
                        Ingat Saya
                    </label>
                    
                    <a href="#" class="pull-right need-help">Lupa Password? </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>