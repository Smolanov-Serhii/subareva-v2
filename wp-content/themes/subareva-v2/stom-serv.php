<?php
/**
Template Name: Сервисы стоматологии
 */

get_header();
$post_id = get_the_ID();
$post_id = 369;
?>
<main class="main">
    <div class="single-vacancy__breadcrumbs breadcrumbs">
        <div class="breadcrumbs__list main-container">
            <?php
            if (qtranxf_getLanguage() == 'ru') {
                ?>
                <a class="breadcrumbs__item" href="<?php echo get_permalink(102); ?>">Главная</a> /
                <span class="breadcrumbs__item current">Наши услуги</span>
                <?php
            } elseif (qtranxf_getLanguage() == 'ua') {
                ?>
                <a class="breadcrumbs__item" href="<?php echo get_permalink(102); ?>">Головна</a> /
                <span class="breadcrumbs__item current">Наші послуги</span>
                <?php
            }
            ?>
        </div>
    </div>
    <section class="our-services">
        <div class="our-services__container main-container">
            <div class="our-services__title section-title padding-right-part">
                <?php the_field('nashi_uslugi_zagolovok' , $post_id)?>
            </div>
            <?php
            if( have_rows('perechen_nashij_uslug' , $post_id )):
                ?>
                <div class="our-services__list">
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
                        <div class="our-services__item <?php echo $hasclass; ?>">
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
            <?php
            endif;
            ?>
        </div>
    </section>
    <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
</main>
<?php get_footer();?>
<?php wp_footer(); ?>
</body>
</html>