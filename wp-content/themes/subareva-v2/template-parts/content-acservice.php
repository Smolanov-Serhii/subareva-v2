<?php
$post_id = get_the_ID();
?>
<section class="acservice">
    <div class="acservice__container medium-container">
        <?php
        $counter = 1;
        if( have_rows('foto_dlya_uslugi' , $post_id )):
            ?>
            <div class="acservice__list">
                <?php
                while( have_rows('foto_dlya_uslugi' , $post_id ) ) : the_row();
                    $title = get_sub_field('nazvanie_taby');
                    $desc = get_sub_field('opisanie_taby');
                    $post_idin = get_the_ID();
                    ?>

                    <div class="acservice__item <?php if($counter == 1){ echo 'active';};?>">
                        <div class="acservice__item-title">
                            <div class="acservice__item-counter"><?php echo '0'.$counter; ?></div>
                            <?php echo $title; ?>
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7203 25.4201V0.580078H14.4203V25.4201H11.7203ZM0.320312 14.3201V11.7401H25.8203V14.3201H0.320312Z" fill="#15223D"/>
                            </svg>
                        </div>
                        <div class="acservice__item-content">
                            <div class="acservice__item-content-desc">
                                <?php echo $desc; ?>
                            </div>
                            <div class="acservice__item-content-grid">
                                <?php
                                if( have_rows('perechen_foto')):
                                    ?>
                                    <?php
                                    while( have_rows('perechen_foto') ) : the_row();
                                        $img = get_sub_field('foto');
                                        ?>
                                        <div class="acservice__item-img">
                                            <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                $counter++;
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
