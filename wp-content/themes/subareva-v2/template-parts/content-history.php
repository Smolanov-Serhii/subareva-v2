<?php
$post_id = get_the_ID();
?>
<section class="history">
    <div class="history__container medium-container">
        <h2 class="history__title">
            <?php the_field('zagolovok_istorii_paczientov' , $post_id)?>
        </h2>
        <?php
        if( have_rows('istorii' , $post_id )):
            ?>
            <div class="history__list">
                <?php
                while( have_rows('istorii' , $post_id ) ) : the_row();
                    $procedure = get_sub_field('praczidura');
                    $title = get_sub_field('zagolovok_s_imenem');
                    $desc = get_sub_field('opisanie');
                    $image = get_sub_field('foto_ablozhki');
                    $video = get_sub_field('video_esli_est');
                    ?>

                    <div class="history__item">
                        <div class="history__item-video">
                            <?php if ($video){
                                ?>
                                    <video src="<?php echo $video; ?>" poster="<?php echo $image; ?>"></video>
                                <?php
                            } else {
                                ?>
                                    <img src="<?php echo $image; ?>" alt="<?php echo $procedure; ?>">
                                <?php
                            }
                            ?>
                        </div>
                        <div class="history__item-text">
                            <div class="history__item-procedure">
                                <?php echo $procedure; ?>
                            </div>
                            <div class="history__item-title">
                                <?php echo $title; ?>
                            </div>
                            <div class="history__item-desc">
                                <?php echo $desc; ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
