<?php
if(is_home()){
    $post_id = get_the_ID();

} if(is_page(544)){
    $post_id = get_the_ID();
}if(is_page(646)){
    $post_id = get_the_ID();
}if(is_page(822)){
    $post_id = get_the_ID();
}else {
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
                        <div class="dragme"><div class="dr-circle"><i class="fa fa-arrows-h" aria-hidden="true"></i></div></div>
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
