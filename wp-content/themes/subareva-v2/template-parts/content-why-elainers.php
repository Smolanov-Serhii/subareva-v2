<?php
$post_id = get_the_ID();
?>
<section class="why-elainers">
    <div class="why-elainers__container main-container">
        <h2 class="why-elainers__title section-title">
            <?php the_field('zagolovok_bloka_elajnery_pochemu', $post_id)?>
        </h2>
        <?php
        if( have_rows('perechen_prichin_elajnery' , $post_id )):
            ?>
            <div class="why-elainers__list">
                <?php
                while( have_rows('perechen_prichin_elajnery' , $post_id ) ) : the_row();
                    $title = get_sub_field('zagolovok_zapisi');
                    $desc = get_sub_field('opisanie_zapisi');
                    ?>
                    <div class="why-elainers__item">
                        <h2 class="why-elainers__item-title">
                            <?php echo $title; ?>
                        </h2>
                        <p class="why-elainers__item-desc">
                            <?php echo $desc; ?>
                        </p>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
