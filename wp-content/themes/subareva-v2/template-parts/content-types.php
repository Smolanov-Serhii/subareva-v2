<?php
$post_id = get_the_ID();
?>
<section class="types">
    <div class="types__container main-container">
        <h2 class="types__title section-title">
            <?php the_field('zagolovok_vidy_implantov', $post_id)?>
        </h2>
        <div class="types__list ">
            <?php
            if( have_rows('vidy_implantov', $post_id) ):
                while( have_rows('vidy_implantov', $post_id) ) : the_row();
                    $image = get_sub_field('kartinka_vida');
                    $title = get_sub_field('zagolovok_vida');
                    $content = get_sub_field('opisanie_vida');
                    ?>
                        <div class="types__item">
                            <img src="<?php echo $image?>" alt="<?php echo $title?>">
                            <div class="types__item-content">
                                <h3><?php echo $title?></h3>
                                <?php echo $content?>
                            </div>
                        </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>