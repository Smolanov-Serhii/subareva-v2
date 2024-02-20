<?php
$post_id = get_the_ID();
?>
<section class="total">
    <div class="total__container main-container">
        <div class="total__text">
            <h2 class="total__title section-title">
                <?php the_field('zagolovok_total', $post_id)?>
            </h2>
            <div class="total__subtitle">
                <?php the_field('podzagolovok_total', $post_id)?>
            </div>
        </div>
        <div class="total__list">
            <?php
            if( have_rows('spisok_elementov_total', $post_id) ):
                while( have_rows('spisok_elementov_total', $post_id) ) : the_row();
                    $image = get_sub_field('kartinka_elementa');
                    $title = get_sub_field('zagolovok_elementa');
                    $desc = get_sub_field('opisanie_elementa');
                    ?>
                        <div class="total__list-item">
                            <div class="total__list-img">
                                <img src="<?php echo $image?>" alt="<?php echo $title?>">
                            </div>
                            <h3 class="total__list-title">
                                <?php echo $title?>
                            </h3>
                            <div class="total__list-desc">
                                <?php echo $desc?>
                            </div>
                        </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>