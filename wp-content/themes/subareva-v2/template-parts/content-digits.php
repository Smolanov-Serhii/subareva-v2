<?php
if(is_home()){
    $post_id = get_the_ID();

} else {
    $post_id = 2;
}

?>
<section class="digits">
    <div class="digits__container main-container">
        <?php
        if( have_rows('perechen_punktov' , $post_id )):
            $counter = 1;
            ?>
            <div class="digits__list">
                <?php
                while( have_rows('perechen_punktov' , $post_id ) ) : the_row();
                    $title = get_sub_field('zagolovok_zapisi');
                    $desc = get_sub_field('opisanie_zapisi');
                    ?>
                    <div class="digits__item">
                        <div class="digits__item-iteration">
                            <?php echo '0' . $counter; ?>
                        </div>
                        <h2 class="digits__item-title">
                            <?php echo $title; ?>
                        </h2>
                        <p class="digits__item-desc">
                            <?php echo $desc; ?>
                        </p>
                    </div>
                <?php
                    $counter ++;
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
