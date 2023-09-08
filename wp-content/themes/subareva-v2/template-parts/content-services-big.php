<?php
$post_id = get_the_ID();
?>

<section class="services-big">
    <div class="services-big__container big-container">
        <div class="services-big__list">
            <?php
            if( have_rows('predlozheniya_vse') ): ?>
            <?php
            while( have_rows('predlozheniya_vse') ) : the_row();
                $title = get_sub_field('nazvanie_proczedury');
                $price = get_sub_field('czena_proczedury');
                $lnk = get_sub_field('ssylka_na_servis');
                ?>
                <div class="services-big__item">
                    <h3 class="services-big__title"><?php echo $title?></h3>
                    <div class="services-big__desc">
                        <div class="services-big__price"><?php echo $price?></div>
                        <a href="<?php echo $lnk?>" class="services-big__lnk"><?php echo the_field('tekst_detalnej', 'option')?></a>
                    </div>
                </div>
                <?php
            endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
