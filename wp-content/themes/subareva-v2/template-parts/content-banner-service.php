<?php
$post_id = get_the_ID();
?>
<section class="banner banner__service">
    <div class="banner__container">
        <div class="banner__left padding-left-part">
            <svg width="461" height="132" viewBox="0 0 461 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M268.123 12.4368C262.462 8.29118 256.801 5.18199 250.111 3.10919C243.935 1.0364 237.245 0 230.555 0C222.321 0 214.086 1.5546 206.367 4.66379C198.647 7.77298 191.957 12.4368 185.782 18.6552C179.606 24.8735 174.974 31.6101 171.887 39.3831C168.799 47.1561 167.255 55.9655 167.255 65.2931C167.255 74.6206 168.799 82.9118 171.887 91.203C174.974 98.976 179.606 106.231 185.782 112.449C191.957 118.668 198.647 123.331 206.367 126.441C214.086 129.55 222.321 131.104 230.555 131.104C239.304 131.104 247.023 129.55 254.742 126.441C262.462 123.331 269.152 118.668 275.328 112.449C281.503 106.231 286.135 99.4942 289.223 91.7212C292.311 83.9482 293.855 75.1388 293.855 65.8112C293.855 54.9291 291.796 45.0833 287.164 35.7557C282.533 26.4281 276.357 18.6552 268.123 12.4368ZM258.345 106.749C251.14 117.113 241.877 122.813 230.555 122.813C219.233 122.813 209.969 117.631 202.765 106.749C195.56 96.385 191.957 82.3936 191.957 65.2931C191.957 48.1925 195.56 34.2011 202.765 23.8371C209.969 13.4732 219.233 7.77298 230.555 7.77298C241.877 7.77298 251.14 12.955 258.345 23.8371C265.55 34.2011 269.152 48.1925 269.152 65.2931C269.152 82.3936 265.55 96.385 258.345 106.749Z" fill="#15223D"/>
                <path d="M108.588 88.0934L75.651 3.10876H51.4633L71.534 52.8558L57.6389 89.1298L24.1877 3.10876H0L51.4633 130.586L76.6803 64.2562L102.927 130.586L151.817 3.10876H139.98L108.588 88.0934Z" fill="#15223D"/>
                <path d="M417.367 88.0934L383.916 3.10876H360.243L380.313 52.8558L366.418 89.1298L332.967 3.10876H308.779L360.243 130.586L384.945 64.2562L411.191 130.586L460.596 3.10876H448.759L417.367 88.0934Z" fill="#15223D"/>
            </svg>
            <h1 class="banner__title">
                <?php the_field('zagolovok_straniczy', $post_id)?>
            </h1>
            <div class="banner__subtitle">
                <?php the_field('opisanie_pod_zagolovkom', $post_id)?>
                <?php
                if( have_rows('perechen_czen_na_uslugi') ):
                    ?>
                    <div class="banner__prices">
                        <?php
                        while( have_rows('perechen_czen_na_uslugi') ) : the_row();
                            $title = get_sub_field('nazvanie_proczedury');
                            $price = get_sub_field('czena');
                            $lnk = get_sub_field('ssylka_straniczu');
                            if($lnk){
                                ?>
                                <a href="<?php echo $lnk?>" class="banner__prices-item">
                                    <p><?php echo $title?></p>
                                    <span><?php echo $price?></span>
                                </a>
                                <?php
                            } else {
                            ?>
                            <div class="banner__prices-item">
                                <p><?php echo $title?></p>
                                <span><?php echo $price?></span>
                            </div>
                            <?php
                            }
                        endwhile;
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div class="banner__right">
            <?php
                if (the_field('video_esli_est', $post_id)){
                ?>
                    <video width="100%" height="100%" autoplay preload="metadata" loop  muted playsinline>
                        <source src="<?php echo the_field('video_esli_est', $post_id);?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php
            } else {
                    if( have_rows('slajder_servisa') ):
                        ?>
                        <div class="banner__container swiper">
                            <div class="swiper-wrapper">
                                <?php
                                while( have_rows('slajder_servisa') ) : the_row();
                                    $image = get_sub_field('kartinka_dlya_slajda');
                                    $video = get_sub_field('video_dlya_slajda');
                                    $alt = get_sub_field('opisanie_kartinki');
                                    ?>
                                    <div class="swiper-slide">
                                        <?php
                                        if ($video){
                                        ?>
                                        <video width="100%" height="100%" poster="<?php echo $image?>" autoplay preload="metadata" loop  muted playsinline>
                                            <source src="<?php echo $video?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <?php
                                        } else {
                                            ?>
                                             <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                                            <?php
                                            }
                                         ?>
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
                }
            ?>
        </div>
    </div>
</section>
