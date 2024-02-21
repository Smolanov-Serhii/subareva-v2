<?php
$post_id = get_the_ID();
?>
<section class="procedure">
    <div class="procedure__image">
        <img src="<?php the_field('kartinka_bloka_proczedury', $post_id)?>" alt="<?php the_field('zagolovok_proczedura', $post_id)?>">
    </div>
    <div class="procedure__container padding-right-part">
        <h2 class="procedure__title section-title">
            <?php the_field('zagolovok_proczedura', $post_id)?>
        </h2>
        <div class="procedure__subtitle">
            <?php the_field('podzagolovok_proczedury', $post_id)?>
        </div>
        <div class="procedure__list ">
            <?php
            if( have_rows('perechen_etapov', $post_id) ):
                while( have_rows('perechen_etapov', $post_id) ) : the_row();
                    $title = get_sub_field('zagolovok');
                    $content = get_sub_field('opisanie');
                    ?>
                        <div class="procedure__item">
                            <div class="procedure__item-header">
                                <?php echo $title?>
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
    </div>
</section>