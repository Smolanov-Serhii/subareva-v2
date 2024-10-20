<?php
if(is_home()){
    $post_id = get_the_ID();
    $post_id = 2;
} else {
    $post_id = 2;
}
?>
<section class="appointment">
    <div class="appointment__container main-container">
        <div class="appointment__content">
            <h2 class="appointment__title">
                <?php the_field('zagolovok_bloka_zayavka' , $post_id)?>
            </h2>
            <p class="appointment__desc">
                <?php the_field('opisanie_bloka_zayavka' , $post_id)?>
            </p>
        </div>
        <?php
        if ( wp_is_mobile() ) {
            ?>
            <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="button">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </a>
            <?php
        } else {
            ?>
            <div class="button js-form">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </div>
            <?php
        }
        ?>
    </div>
</section>
