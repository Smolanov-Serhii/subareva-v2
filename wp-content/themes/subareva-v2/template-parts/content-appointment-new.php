<?php

if (is_page(102) || is_page(447) || is_page(369) || is_page(1282)){
    $post_id = 646;
}else if (is_page(1574)){
    $post_id = get_the_ID();
} else {
    $post_id = get_the_ID();
    $post_id = 646;
}
?>
<section class="appointment-new">
    <div class="appointment-new__container main-container">
        <div class="appointment-new__content">
            <h2 class="appointment-new__title">
                <?php the_field('zagolovok_formy' , $post_id)?>
            </h2>
<!--            <p class=" wp-cappointment-new__desc">-->
<!--                --><?php //the_field('podzagolovok_formy' , $post_id)?>
<!--            </p>-->
        </div>
        <?php
        if ( wp_is_mobile() ) {
            ?>
            <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="button button-white">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </a>
            <?php
        } else {
            ?>
            <div class="button button-white js-form">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </div>
            <?php
        }
        ?>
    </div>
</section>
