<?php
$post_id = get_the_ID();
?>
<section class="prich prich__new">
    <div class="prich__new-img">
        <img src="<?php the_field('prich-img', $post_id)?>" alt="<?php the_field('zagolovok_prichiny', $post_id)?>">
    </div>
    <div class="prich__container main-container">
        <h2 class="prich__title section-title">
            <?php the_field('zagolovok_prichiny', $post_id)?>
        </h2>
        <div class="prich__list">
            <?php
            $counter = 1;
            if( have_rows('prichiny', $post_id) ):
                while( have_rows('prichiny', $post_id) ) : the_row();
                    $title = get_sub_field('tekst_prichiny');
                    $desc = get_sub_field('tekst_desc');
                    ?>
                        <div class="prich__list-item">
                            <p class="prich__list-title">
                                <?php echo $title?>
                            </p>
                            <p class="prich__list-desc">
                                <?php echo $desc?>
                            </p>
                        </div>
                    <?php
                    if ($counter == 2){
                        ?>
                            <div class="devider"></div>
                        <?php
                    }
                    $counter ++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>