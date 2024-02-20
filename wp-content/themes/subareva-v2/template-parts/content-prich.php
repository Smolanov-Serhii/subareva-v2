<?php
$post_id = get_the_ID();
?>
<section class="prich">
    <div class="prich__container main-container">
        <h2 class="prich__title section-title">
            <?php the_field('zagolovok_prichiny', $post_id)?>
        </h2>
        <div class="prich__list">
            <?php
            if( have_rows('prichiny', $post_id) ):
                while( have_rows('prichiny', $post_id) ) : the_row();
                    $title = get_sub_field('tekst_prichiny');
                    ?>
                        <div class="prich__list-item">
                            <p class="prich__list-title">
                                <?php echo $title?>
                            </p>
                        </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>