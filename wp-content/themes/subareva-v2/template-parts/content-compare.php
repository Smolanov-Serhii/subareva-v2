<?php

if(is_page(544) || is_page(646) || is_page(822)){
    $post_id = get_the_ID();
} else {
    $post_id = 2;
}

?>
<section class="compare">
    <div class="compare__container main-container">
        <div class="compare__title section-title">
            <?php the_field('zagolovok_bloka_portfolio' , $post_id)?>
        </div>
        <?php
        if( have_rows('perechen_sravnenij' , $post_id )):
            ?>
            <div class="compare__list">
                <?php
                while( have_rows('perechen_sravnenij' , $post_id ) ) : the_row();
                    $imgold = get_sub_field('izobrazhenie_do');
                    $imgnew = get_sub_field('izobrazhenie_posle');
                    ?>

                    <div class="compare__item sl-container">
                        <div class="view view-after" style="background-image: url('<?php echo $imgnew; ?>')">
<!--                            <img src="--><?php //echo $imgnew; ?><!--"/>-->
                        </div>
                        <div class="view view-before"">
                            <img src="<?php echo $imgold; ?>"/>
                        </div>
                        <div class="dragme">
                            <div class="dr-circle">
                                <svg width="35" height="20" viewBox="0 0 35 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.91385 1.93445L1.77197 10.0764L9.91385 18.2183" stroke="#15223D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25.0861 1.93445L33.228 10.0764L25.0861 18.2183" stroke="#15223D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
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
