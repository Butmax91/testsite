<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="content">
    <section class="hero">
        some slider maybe
    </section>
    <section class="products text-center" >
        <div  class="products-main  d-flex flex-wrap justify-content-around">
            <?php foreach ($clothes as $clothe):?>
                <div class="product">
                    <div class="product-info">
                        <a href="<?=base_url()?>itemID/<?=$clothe['clothID']?>"><img src="<?=base_url()?>/assets/<?=$clothe['cloth_img'];?>" alt=""></a>
                        <div class="title"><?=$clothe['cloth_title'];?></div>
                        <div class="price"><?=$clothe['cloth_price'];?></div>
                        <div class="desc"><?=$clothe['cloth_description'];?></div>
                        <button data-id="<?=$clothe['clothID']?>" class="buy">BUY</button>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
</main>