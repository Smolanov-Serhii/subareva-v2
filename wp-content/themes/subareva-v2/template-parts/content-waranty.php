<?php
$post_id = 102;
?>
<section class="waranty">
    <div class="waranty__container main-container">
        <div class="waranty__left">
            <h2 class="waranty__title section-title">
                <?php the_field('zagolovok_bloka_garantii' , $post_id)?>
            </h2>
            <div class="waranty__content">
                <?php the_field('opisanie_bloka_garantii' , $post_id)?>
            </div>
        </div>
        <div class="waranty__right">
            <?php
            if( have_rows('izobrazheniya_bloka' , $post_id) ):
                ?>
                <div class="waranty__right-container swiper">
                    <div class="swiper-wrapper">
                        <?php
                        while( have_rows('izobrazheniya_bloka' , $post_id) ) : the_row();
                            $image = get_sub_field('izobrazhenie_slajda');
                            $alt = get_sub_field('opisanie_slajda');
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="banner__nav">
                        <div class="banner__prev">
                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292892 6.7929C-0.0976296 7.18342 -0.0976295 7.81659 0.292893 8.20711L6.65686 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41422 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819459 8.07107 0.428935C7.68054 0.0384104 7.04738 0.0384104 6.65685 0.428935L0.292892 6.7929ZM37 6.5L1 6.5L1 8.5L37 8.5L37 6.5Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="banner__next">
                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7071 8.20711C37.0976 7.81658 37.0976 7.18342 36.7071 6.79289L30.3431 0.428932C29.9526 0.0384078 29.3195 0.0384078 28.9289 0.428932C28.5384 0.819457 28.5384 1.45262 28.9289 1.84315L34.5858 7.5L28.9289 13.1569C28.5384 13.5474 28.5384 14.1805 28.9289 14.5711C29.3195 14.9616 29.9526 14.9616 30.3431 14.5711L36.7071 8.20711ZM0 8.5H36V6.5H0V8.5Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
