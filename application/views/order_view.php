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
            <label for="" class="text-left">Input your adress
                <textarea type="text"
                          name="adress"
                          ">
                <?php if(isset($userInfo['adress'])) echo $userInfo['adress']?>
                </textarea>
            </label>
            <?=form_error('adress')?>
            <label for="">Select method of obtaining
                <select name="delivery" >
                    <option value="bySelf" selected>By self</option>
                    <option value="curier">curier</option>
                </select>
            </label>
            <label for="">Select method of payment
                <select name="payment" >
                    <option value="cash" selected>cash</option>
                    <option value="cashless" selected>cashless</option>
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