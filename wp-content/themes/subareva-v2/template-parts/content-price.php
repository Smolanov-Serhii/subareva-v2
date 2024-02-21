<?php
$post_id = get_the_ID();
?>
<section class="procedure procedure">
    <div class="procedure__image">
        <img src="<?php the_field('kartinka_stoimosti', $post_id)?>" alt="<?php the_field('zagolovok_stoimost', $post_id)?>">
    </div>
    <div class="procedure__container padding-right-part procedure-move">
        <h2 class="procedure__title section-title">
            <?php the_field('zagolovok_stoimost', $post_id)?>
        </h2>
        <div class="procedure__list ">
            <?php
            if( have_rows('perechen_stoimostej', $post_id) ):
                while( have_rows('perechen_stoimostej', $post_id) ) : the_row();
                    $title = get_sub_field('zagolovok_zapisi');
                    $subtitle = get_sub_field('podzagolovok');
                    $content = get_sub_field('opisanie');
                    ?>
                        <div class="procedure__item">
                            <div class="procedure__item-header">
                                <?php echo $title?>
                                <span><?php echo $subtitle?></span>
                                <?php
                                if ($content){
                                    ?>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6112 9.53841V0.649536H9.38899V9.53841H0.5V11.7606H9.38899V20.6495H11.6112V11.7606H20.5V9.53841H11.6112Z" fill="#000125"/>
                                    </svg>
                                    <?php
                                }
                                ?>

                            </div>
                            <?php
                            if ($content){
                                ?>
                                <div class="procedure__item-content">
                                    <?php echo $content?>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="procedure__bottom">
            <?php the_field('ndpis_snizu_bloka', $post_id)?>
        </div>

    </div>
</section>