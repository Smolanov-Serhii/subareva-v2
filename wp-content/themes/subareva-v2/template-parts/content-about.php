<?php
$post_id = get_the_ID();
?>
<section class="about">
    <div class="about__container main-container">
        <h2 class="about__title section-title">
            <?php the_field('zagolovok_bloka_klinika' , $post_id)?>
        </h2>
        <div class="about__left">
            <div class="about__content">
                <?php the_field('kontent_bloka_klinika' , $post_id)?>
                <?php
                if( have_rows('fotografii_bloka_klinika') ):
                    $counter = 1;
                    ?>
                    <div class="about__list">
                        <?php
                        while( have_rows('fotografii_bloka_klinika') ) : the_row();
                            $image = get_sub_field('izobrazhenie');
                            $alt = get_sub_field('opisanie_izobrazheniya');
                            if ($counter == 1){
                                ?>
                                <div class="about__item">
                                    <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                                </div>
                                <?php
                            }
                            $counter ++;
                        endwhile;
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
        <?php
        if( have_rows('fotografii_bloka_klinika') ):
            $counter = 1;
            ?>
            <div class="about__list">
                <?php
                while( have_rows('fotografii_bloka_klinika') ) : the_row();
                    $image = get_sub_field('izobrazhenie');
                    $alt = get_sub_field('opisanie_izobrazheniya');
                    if ($counter  > 1){
                        ?>
                        <div class="about__item">
                            <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                        </div>
                        <?php
                    }
                    $counter ++;
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
