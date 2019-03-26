<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="content d-flex">
    <div class="userInfo col-6">

        <form action="" method="post" class="d-flex flex-column">
            <label >Your user name is
                <input type="text"
                       name="login"
                       placeholder="<?php if(isset($userInfo['login'])){
                           echo $userInfo['login'];
                       }else {
                           echo  '';
                       }  ?>">
            <label>
                <?=form_error('login')?>
                <input  name="email"
                        type="email"
                        placeholder="<?php if(isset($userInfo['email'])){
                            echo $userInfo['email'];
                        }else {
                            echo  '';
                        }  ?>">
            </label>
                <?=form_error('email')?>
            <label>
                <input  name="phonenumber"
                        type="tel"
                        placeholder="<?php if(isset($userInfo['phonenumber'])){
                            echo $userInfo['phonenumber'];
                        }else {
                            echo  '';
                        }  ?>">
            </label>
                <?=form_error('phonenumber')?>
            <label >
                <input  name="city"
                        type="text"
                        placeholder="<?php if(isset($userInfo['city'])){
                            echo $userInfo['city'];
                        }else {
                            echo  '';
                        }  ?>">

            </label>
                <?=form_error('city')?>
            <label >
                <input  name="street"
                        type="text"
                        placeholder="<?php if(isset($userInfo['street'])){
                            echo $userInfo['street'];
                        }else {
                            echo  '';
                        }  ?>">

            </label>
                <?=form_error('street')?>
            <label >
                <input  name="building"
                        type="text"

                        placeholder="<?php if(isset($userInfo['building'])){
                           echo $userInfo['building'];
                       }else {
                           echo  '';
                       }  ?>">

            </label>
                <?=form_error('building')?>
            <label >
                <input  name="appartment"
                        type="text"

                        placeholder="<?php if(isset($userInfo['appartment'])){
                            echo $userInfo['appartment'];
                        }else {
                            echo  '';
                        }  ?>">

            </label>
                <?=form_error('appartment')?>

            <button>Ok</button>
        </form>
    </div>
    <div class="userIrders col-6">
        <table>
            <thead>
            <?php foreach ($orders as $order):?>
                <tr>
                    <td class="userIrders-img">
                        <img src="<?=base_url()?>assets/<?=$order['cloth_img']?>" width="50" alt="">
                    </td>
                    <td class="userIrders-title">
                        <?=$order['cloth_title'] ?>
                    </td>
                    <td class="userIrders-date">
                        <?=$order['orderDate'] ?>
                    </td>
                </tr>
            <?php endforeach;?>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</main>

