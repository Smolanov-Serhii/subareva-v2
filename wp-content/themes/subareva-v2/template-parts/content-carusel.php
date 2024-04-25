<?php
$post_id = get_the_ID();
?>
<section class="carusel">
    <div class="carusel__list swiper">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('karusel_uslug' , $post_id )):
                while( have_rows('karusel_uslug' , $post_id ) ) : the_row();
                    $title = get_sub_field('nazvanie_uslugi');
                    $lnk = get_sub_field('ssylka_na_uslugu');
                    if ($lnk){
                        ?>
                        <a href="<?php echo $lnk; ?>" class="carusel__list-item swiper-slide">
                            <?php echo $title; ?>
                        </a>
                        <?php
                    } else {
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <?php echo $title; ?>
                        </div>
                        <?php
                    }
                endwhile;
            endif;
            ?>
            <?php
            if( have_rows('karusel_uslug' , $post_id )):
                while( have_rows('karusel_uslug' , $post_id ) ) : the_row();
                    $title = get_sub_field('nazvanie_uslugi');
                    $lnk = get_sub_field('ssylka_na_uslugu');
                    if ($lnk){
                        ?>
                        <a href="<?php echo $lnk; ?>" class="carusel__list-item swiper-slide">
                            <?php echo $title; ?>
                        </a>
                        <?php
                    } else {
                        ?>
                        <div class="carusel__list-item swiper-slide">
                            <?php echo $title; ?>
                        </div>
                        <?php
                    }
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
