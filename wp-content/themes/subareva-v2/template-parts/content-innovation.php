<?php
if (is_page(369)){
    $post_id = 102;
} else {
    $post_id = get_the_ID();
}
?>
<section class="innovation">
    <div class="innovation__container main-container">
        <div class="innovation__title section-title">
            <?php the_field('zagolovok_innovaczij' , $post_id)?>
        </div>
        <?php
        if( have_rows('perechen_iinovaczij' , $post_id )):
            ?>
            <div class="innovation__list">
                <?php
                while( have_rows('perechen_iinovaczij' , $post_id ) ) : the_row();
                    $title = get_sub_field('nazvanie_innovaczii');
                    $image = get_sub_field('izobrazhenie_innovaczii');
                    ?>
                    <div class="innovation__item">
<!--                        <h2 class="innovation__item-title">-->
<!--                            --><?php //echo $title; ?>
<!--                        </h2>-->
                        <div class="innovation__item-image">
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                        </div>
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
