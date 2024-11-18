<?php
$post_id = get_the_ID();
?>
<section class="banner-2c1">
    <div class="banner-2c1__container medium-container">
        <h1 class="banner-2c1__title">
            <?php the_field('zagolovok' , $post_id)?>
        </h1>
        <div class="banner-2c1__subtitle">
            <?php the_field('podzagolovok' , $post_id)?>
        </div>
        <div class="banner-2c1__img">
            <img src="<?php echo the_field('izobrazhenie_1' , $post_id)?>" alt="<?php the_field('zagolovok' , $post_id)?>">
        </div>
        <div class="banner-2c1__img">
            <img src="<?php echo the_field('izobrazhenie_2' , $post_id)?>" alt="<?php the_field('zagolovok' , $post_id)?>">
            <div class="banner-2c1__img-desc">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0_2014_671" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                        <rect width="36" height="36" fill="url(#pattern0_2014_671)"/>
                    </mask>
                    <g mask="url(#mask0_2014_671)">
                        <rect width="36" height="36" fill="#DCDCDE"/>
                    </g>
                    <defs>
                        <pattern id="pattern0_2014_671" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2014_671" transform="scale(0.00195312)"/>
                        </pattern>
                        <image id="image0_2014_671" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <?php the_field('tekst_na_ftorom_foto' , $post_id)?>
            </div>
        </div>
        <div class="banner-2c1__img">
            <img src="<?php echo the_field('izobrazhenie_3' , $post_id)?>" alt="<?php the_field('zagolovok' , $post_id)?>">
        </div>
    </div>
</section>
