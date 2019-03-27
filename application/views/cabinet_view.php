<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="content d-flex m-auto">
    <div class="userInfo col-6">

        <form action="" method="post" class="d-flex flex-column">
            <label >Your user name is
                <input type="text"
                       name="login"
                       placeholder="<?php if(isset($userInfo['login'])){
                           echo $userInfo['login'];
                       }else {
                           echo  '';
                       }  ?>"></label>
                <?=form_error('login')?>
            <label> Your email is
                <input  name="email"
                        type="email"
                        placeholder="<?php if(isset($userInfo['email'])){
                            echo $userInfo['email'];
                        }else {
                            echo  '';
                        }  ?>">
            </label>
                <?=form_error('email')?>
            <label> Your phone number is
                <input  name="phonenumber"
                        type="tel"
                        placeholder="<?php if(isset($userInfo['phonenumber'])){
                            echo $userInfo['phonenumber'];
                        }else {
                            echo  '';
                        }  ?>">
            </label>
                <?=form_error('phonenumber')?>
            <label >Your adress is
                <textarea
                        name="adress"><?php if(isset($userInfo['adress'])){
                        echo trim($userInfo['adress']);
                    }else {
                        echo  '';
                    }?>
                </textarea>
            </label>
            <?=form_error('adress')?>

            <button>Ok</button>
        </form>
    </div>
    <div class="userOrders col-6">
        <table class="table">
            <caption>Your orders</caption>
            <tbody>
            <?php if(count($orders)<1){
                echo '<tr><td class="text-center">you have no orders yet</td> </tr> ';
            } ?>
            <?php foreach ($orders as $order):?>
                <tr>
                    <td class="userIrders-img">
                        <img src="<?=base_url()?>assets/img/<?=$order['shoesImg']?>/1.jpeg" width="50" alt="">
                    </td>
                    <td class="userIrders-title">
                        <?=$order['shoesTitle'] ?>
                    </td>
                    <td class="userIrders-date"><?=$order['orderDate'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

</main>

