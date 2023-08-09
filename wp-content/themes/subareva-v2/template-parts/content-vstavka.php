<?php
$post_id = get_the_ID();
?>
<section class="vstavka">
    <div class="vstavka__container main-container">
        <div class="vstavka__left">
            <h2 class="vstavka__title">
                <?php the_field('zagolovok_bloka_vstavka' , $post_id)?>
            </h2>
            <div class="vstavka__subtitle">
                <?php the_field('podzagolovok_bloka_vstavka' , $post_id)?>
            </div>
        </div>
        <div class="vstavka__right">
            <?php
            if( have_rows('nomera_telefonov', $post_id) ):
                ?>
                    <?php
                    while( have_rows('nomera_telefonov', $post_id) ) : the_row();
                        $phone = get_sub_field('nomer_telefona');
                        ?>
                        <a href="tel:<?php echo $phone?>" class="vstavka__phone"><?php echo $phone?></a>
                    <?php
                    endwhile;
                    ?>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
