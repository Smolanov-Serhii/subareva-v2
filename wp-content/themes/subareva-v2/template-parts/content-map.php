<?php

if (is_page(102)){
    $post_id = 646;
} else {
    $post_id = get_the_ID();
}
?>
<section class="map">
    <div class="map__container main-container">
        <div class="map__text">
            <h2 class="map__title section-title">
                <?php the_field('zagolovok_karty', $post_id)?>
            </h2>
            <div class="map__desc">
                <div class="row">
                    <svg width="24" height="37" viewBox="0 0 24 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 11.7308C24 18.2096 12 37.0037 12 37.0037C12 37.0037 0 18.2096 0 11.7308C0 5.25208 5.37258 0 12 0C18.6274 0 24 5.25208 24 11.7308Z" fill="#000125"/>
                        <path d="M18.2549 12.4981C18.2549 15.9525 15.4545 18.7529 12 18.7529C8.54559 18.7529 5.7452 15.9525 5.7452 12.4981C5.7452 9.04364 8.54559 6.24325 12 6.24325C15.4545 6.24325 18.2549 9.04364 18.2549 12.4981Z" fill="white"/>
                    </svg>
                    <?php the_field('karta_adress', $post_id)?>
                </div>
                <?php
                if (get_field('telefon1', $post_id)){
                    ?>
                    <div class="row"><a href="tel:<?php the_field('telefon1', $post_id)?>">тел:<?php the_field('telefon1', $post_id)?></a></div>
                    <?php
                }
                ?>

                <?php
                if (get_field('telefon2', $post_id)){
                    ?>
                    <div class="row"><a href="tel:<?php the_field('telefon2', $post_id)?>">тел:<?php the_field('telefon2', $post_id)?></a></div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="map__map">
            <?php the_field('karta', $post_id)?>
        </div>
    </div>
</section>