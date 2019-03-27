<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="content">
    <section class="products text-center" >
        <div  class="products-main  d-flex flex-wrap justify-content-around">
            <?php foreach ($shoes as $item):?>
                <div class="product">
                    <div class="product-info">
                        <button class="sliderleft slider"><</button>
                        <a href="<?=base_url()?>itemID/<?=$item['shoesID']?>">
                            <img data-count="<?=$item['imgCount']?>" src="<?=base_url()?>assets/img/<?=$item['shoesImg'];?>/1.jpeg">
                        </a>
                        <button class="sliderRight slider"> ></button>
                        <div class="title"><?=$item['shoesTitle'];?></div>
                        <div class="desc"><?=$item['shoesBrand'];?></div>
                        <div class="price"><?=$item['shoesPrice'];?></div>
                        <button data-id="<?=$item['shoesID']?>" class="buy">add to cart</button>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
</main>