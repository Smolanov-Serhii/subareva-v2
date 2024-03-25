<?php
$post_id = get_the_ID();
?>
<section class="vinir-type">
    <div class="vinir-type__container main-container">
        <h2 class="vinir-type__title section-title">
            <?php the_field('zagolovok_bloka_tipy_venirov' , $post_id)?>
        </h2>
        <div class="vinir-type__list">
            <?php
            if( have_rows('tipy_venirov_povtoritel', $post_id) ):
                ?>
                <?php
                while( have_rows('tipy_venirov_povtoritel' , $post_id) ) : the_row();
                    $image = get_sub_field('kartinka_tipa_venirov');
                    $title = get_sub_field('nazvanie_tipa_venirov');
                    $content = get_sub_field('opisanie_tipa_venirov');
                    ?>
                    <div class="vinir-type__item">
                        <div class="vinir-type__photo">
                            <img src="<?php echo $image?>" alt="<?php echo $title?>">
                        </div>
                        <div class="vinir-type__desc">
                            <p class="vinir-type__name"><?php echo $title?></p>
                            <p class="vinir-type__content"><?php echo $content?></p>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>