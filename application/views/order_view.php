<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="content ">
    <h2 class="order-head">Order making</h2>
    <div class="order-contentainer  container d-flex">
        <form action="/order" method="post" class="form-group order-form col-6">
            <label for="">Input your name
                <input type="text"
                       placeholder="Input your name"
                       name="login"
                       value="<?php if(isset($userInfo['login'])) echo $userInfo['login']?>"></label>
            <?=form_error('login')?>
            <label for="">Input your phone number
                <input type="tel"
                       name="phonenumber"
                       value="<?php if(isset($userInfo['phonenumber'])) echo $userInfo['phonenumber']?>"
                       placeholder="(0**) **-**-***" > </label>
            <?=form_error('phonenumber')?>

            <label for="">Input your city
                <input type="text"
                       name="city"
                       value="<?php if(isset($userInfo['city'])) echo $userInfo['city']?>"></label>
            <?=form_error('city')?>
            <label for="">Input your adress
                <input type="text"
                       name="street"
                       value="<?php if(isset($userInfo['street'])) echo $userInfo['street']?>"></label>
            <?=form_error('street')?>
            <label for="">Input your adress
                <input type="text"
                       name="building"
                       value="<?php if(isset($userInfo['building'])) echo $userInfo['building']?>"></label>
            <?=form_error('building')?>
            <label for="">Input your adress
                <input type="text"
                       name="appartment"
                       value="<?php if(isset($userInfo['appartment'])) echo $userInfo['appartment']?>"></label>
            <?=form_error('appartment')?>
            <label for="">Select method of obtaining
                <select name="delivery" >
                    <option value="bySelf">By self</option>
                    <option value="curier">curier</option>
                </select>
            </label>
            <label for="">Select method of payment
                <select name="payment" >
                    <option value="cash">cash</option>
                    <option value="cashless">cashless</option>
                </select>
            </label><br>
            <input type="text" id="orderValue" name="orderData" style="display: none">
            <input type="text"  name="userID"
                   style="display: none"
                   value="<?php if(isset($userInfo['ID'])){
                        echo $userInfo['ID'];
                            }else {
                                echo  '';
                            } ?>">
            <button>order</button>
        </form>
        <div class="order-content col-6">
            <table class="order-content-table table">
                <tbody></tbody>
                <tfoot>
                <tr>
                    <td class="text-right" colspan="3">total</td>
                    <td class="total text-center">0</td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

</main>