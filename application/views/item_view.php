<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<br>
<?php var_dump($item) ?>
<main class="content container">
    <section class="item d-flex">
        <div class="item-img">
            <div class="largeImg">
                <img src="<?=base_url()?>assets/img/<?=$item['0']['shoesImg']?>/1.jpeg" alt=""></div>
            <div class="smallImg"></div>
        </div>
        <div class="itemInfo">
            <h1 class="item-title"></h1>
            <div class="item-price"></div>
            <div class="size"></div>
            <button>add to cart</button>
            <table>
                <caption >
                    <span style="font-weight: bold;">About product</span><br>
                    <span class="item title"><?=$item[0]['shoesTitle']?></span>
                </caption>
                <tbody>
                <tr>
                    <td>Price</td>
                    <td><?=$item[0]['shoesPrice']?> $</td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><?=$item[0]['shoesBrand']?></td>
                </tr>
                <tr>
                    <td>Utensils</td>
                    <td><?=$item[0]['shoesUtensils']?></td>
                </tr>
                <tr>
                    <td>Composition</td>
                    <td> o l osdf sdof sdf sdf sf sf </td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td> black</td>
                </tr>
                <tr>
                    <td>Producer</td>
                    <td> moldova</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td> 100</td>
                </tr>
                </tbody>
            </table>
        </div>

    </section>
</main>