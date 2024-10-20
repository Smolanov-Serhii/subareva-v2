<?php
$post_id = get_the_ID();
?>
<section class="directions">
    <div class="directions__container main-container">
        <div class="directions__title section-title padding-right-part">
            <?php the_field('zagolovok_bloka_napravleniya' , $post_id)?>
        </div>
        <?php
        if( have_rows('taby_bloka_napravleniya' , $post_id )):
            ?>
            <div class="directions__tabs tabs-elements">
                <div class="directions__tabs-header">
                    <?php
                    while( have_rows('taby_bloka_napravleniya' , $post_id ) ) : the_row();
                        $tab = get_sub_field('navzanie_taby_povtoritelya');
                        ?>
                        <div class="directions__tabs-name tabs-nav-item">
                            <?php echo $tab;?>
                        </div>
                    <?php
                    endwhile
                    ?>
                </div>
                <div class="directions__tabs-contents">
                    <?php
                    while( have_rows('taby_bloka_napravleniya' , $post_id ) ) : the_row();
                        $img = get_sub_field('kartinka_taby');
                        $text = get_sub_field('opisanie_taby');
                        ?>
                        <div class="tabs-content-item directions__tabs-content">
                            <div class="directions__tabs-img">
                                <img src="<?php echo $img;?>">
                            </div>
                            <div class="directions__tabs-text">
                                <?php echo $text;?>
                            </div>
                        </div>
                    <?php
                    endwhile
                    ?>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
