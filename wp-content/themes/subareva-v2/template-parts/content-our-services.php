<?php
$post_id = get_the_ID();
?>
<section class="our-services">
    <div class="our-services__container padding-left-part">
        <div class="our-services__title section-title padding-right-part">
            <?php the_field('nashi_uslugi_zagolovok' , $post_id)?>
            <div class="current-team__btnt">
                <a href="<?php the_permalink(1282)?>" class="button">
                    <?php the_field('nadpis_vse_uslugi', 'option')?>
                </a>
            </div>
        </div>
        <?php
        if( have_rows('perechen_nashij_uslug' , $post_id )):
            ?>
            <div class="our-services__list swiper">
                <div class="swiper-wrapper">
                    <?php
                    while( have_rows('perechen_nashij_uslug' , $post_id ) ) : the_row();
                        $title = get_sub_field('nazvanie_proczedury');
                        $lnk = get_sub_field('ssylka_na_servis');
                        $desc = get_sub_field('opisanie_uslugi');
                        $bg = get_sub_field('kartinka_dlya_uslugi');
                        $old = get_sub_field('staraya_czena');
                        $current = get_sub_field('tekushhaya_czena');
                        $akcia = get_sub_field('akcziya');
                        if ($bg){
                            $hasclass = 'has';
                        } else {
                            $hasclass = "";
                        }
                        ?>
                        <div class="our-services__item swiper-slide <?php echo $hasclass; ?>">
                            <?php
                            if ($bg){
                                ?>
                                <div class="our-services__item-bg">
                                    <img src="<?php echo $bg;?>" alt="<?php echo $title;?>">
                                </div>
                                <?php
                            }
                            ?>
                            <div class="our-services__item-title">
                                <?php echo $title;?>
                            </div>
                            <div class="our-services__item-desc">
                                <?php echo $desc;?>
                                <div class="price">
                                    <div class="old">
                                        <?php echo $old;?>
                                    </div>
                                    <div class="current">
                                        <?php echo $current;?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($lnk){
                                ?>
                                <a href="<?php echo $lnk; ?>">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="32" cy="32" r="32" fill="#15223D"/>
                                        <path d="M25.0215 38.9785L38.9785 25.0215M38.9785 25.0215H25.0215M38.9785 25.0215V38.9785" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                                    </svg>
                                </a>
                                <?php
                            }
                            ?>
                            <?php
                            if ($akcia){
                                ?>
<!--                                <div class="akcia">-->
<!--                                    --><?php //echo $akcia;?>
<!--                                </div>-->
                                <?php
                            }
                            ?>
                        </div>
                    <?php
                    endwhile
                    ?>
                </div>
            </div>
            <div class="swiper-nav padding-right-part">
                <div class="prev">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" transform="rotate(-180 32 32)" fill="#15223D"/>
                        <path d="M41.8691 32L22.1309 32M22.1309 32L32 41.8691M22.1309 32L32 22.1309" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                    </svg>
                </div>
                <div class="next">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#15223D"/>
                        <path d="M22.1309 32H41.8691M41.8691 32L32 22.1309M41.8691 32L32 41.8691" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                    </svg>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
