<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="/auth/login" class="signup col-12 col-sm-10 col-md-8 col-lg-6" >
    <legend>Log In</legend>
    <label for=""></label><input type="text" placeholder="email" class="form-control" name="email" value="<?=set_value('email')?>">
    <?=form_error('email')?>
    <label for=""></label><input type="text" placeholder="password" class="form-control" name="password" >
    <?php echo form_error('password'); ?>
    <button>login Up</button>
</form>