<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <form method="post" action="/auth/signup" class="signup  col-12 col-sm-10 col-md-8 col-lg-6 " >
            <legend>Sign Up</legend>
        <label for=""></label><input type="text" placeholder="name" class="form-control" name="login" value="<?=set_value('login')?>">
        <?=form_error('login')?>
        <label for=""></label><input type="text" placeholder="email" class="form-control" name="email" value="<?=set_value('email')?>">
        <?=form_error('email')?>
        <label for=""></label><input type="text" placeholder="password" class="form-control" name="password" >
        <?php echo form_error('password'); ?>
        <label for=""></label><input type="text" placeholder="repeat password" class="form-control" name="repassword">
        <?=form_error('repassword')?>
        <button>Sign Up</button>
    </form>
