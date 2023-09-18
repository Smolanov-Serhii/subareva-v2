<?php
if(is_page(102) || is_page(369) || is_page(447)){
    $post_id = get_the_ID();
} else {
    $post_id = 102;
}

?>
<section class="reviews">
    <div class="reviews__container main-container">
        <h2 class="reviews__title section-title">
            <?php the_field('zagolovok_bloka_otzyvovy' , $post_id)?>
        </h2>
        <div class="reviews__container swiper">
            <?php
            if( have_rows('perechen_otzyvov', $post_id) ):
                ?>
                <div class="reviews__wrapper swiper-wrapper">
                    <?php
                    while( have_rows('perechen_otzyvov', $post_id) ) : the_row();
                        $image = get_sub_field('izobrazhenie_otzyva');
                        $video = get_sub_field('video_otzyva');
                        $name = get_sub_field('imya');
                        $coment = get_sub_field('tekst_otzyva');
                        ?>
                        <div class="reviews__slide swiper-slide">
                            <?php
                                if ($video){
                                    ?>
                                        <div class="reviews__slide-img reviews__slide-video">
                                            <video width="100%" height="100%" controls preload="metadata" poster="<?php echo $image?>">
                                                <source src="<?php echo $video?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>

                                    <?php
                                } else {
                                    ?>
                                    <div class="reviews__slide-img">
                                        <img src="<?php echo $image?>" alt="<?php echo $name?>">
                                    </div>
                                    <?php
                                }
                            ?>
                            <div class="reviews__slide-desc">
                                <div class="name">
                                    <?php echo $name?>
                                </div>
                                <div class="content">
                                    <svg width="58" height="42" viewBox="0 0 58 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.9959 23.6461C35.7864 22.6702 34.0898 21.2064 32.9061 19.2547C31.6435 17.378 31.0122 15.1635 31.0122 12.6113C31.0122 8.85791 32.2748 5.81769 34.8 3.49061C37.3252 1.16353 40.5605 -2.29009e-06 44.5061 -2.63503e-06C48.4517 -2.97996e-06 51.6871 1.16353 54.2122 3.49061C56.7374 5.81769 58 8.85791 58 12.6113C58 14.3378 57.7633 16.0643 57.2898 17.7909C56.8163 19.5174 55.751 22.0697 54.0939 25.4477L46.5184 42L32.4327 42L37.9959 23.6461ZM6.98367 23.6461C4.77415 22.6702 3.07755 21.2064 1.89387 19.2547C0.631292 17.378 1.46858e-06 15.1635 1.24545e-06 12.6113C9.17324e-07 8.85792 1.26259 5.81769 3.78775 3.49061C6.31292 1.16354 9.5483 4.21085e-07 13.4939 7.61515e-08C17.4395 -2.68782e-07 20.6748 1.16354 23.2 3.49061C25.7252 5.81769 26.9878 8.85791 26.9878 12.6113C26.9878 14.3378 26.751 16.0643 26.2775 17.7909C25.8041 19.5174 24.7388 22.0697 23.0816 25.4477L15.5061 42L1.42041 42L6.98367 23.6461Z" fill="#EDEDED"/>
                                    </svg>
                                    <?php echo $coment?>
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
            <div class="banner__nav">
                <div class="banner__prev">
                    <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292892 6.7929C-0.0976296 7.18342 -0.0976295 7.81659 0.292893 8.20711L6.65686 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41422 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819459 8.07107 0.428935C7.68054 0.0384104 7.04738 0.0384104 6.65685 0.428935L0.292892 6.7929ZM37 6.5L1 6.5L1 8.5L37 8.5L37 6.5Z" fill="#15223D"/>
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
                <div class="banner__next">
                    <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.7071 8.20711C37.0976 7.81658 37.0976 7.18342 36.7071 6.79289L30.3431 0.428932C29.9526 0.0384078 29.3195 0.0384078 28.9289 0.428932C28.5384 0.819457 28.5384 1.45262 28.9289 1.84315L34.5858 7.5L28.9289 13.1569C28.5384 13.5474 28.5384 14.1805 28.9289 14.5711C29.3195 14.9616 29.9526 14.9616 30.3431 14.5711L36.7071 8.20711ZM0 8.5H36V6.5H0V8.5Z" fill="#15223D"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
