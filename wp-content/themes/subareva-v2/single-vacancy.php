<?php
/**
 * The template for displaying all pages
 */

get_header();
$post_id = get_the_ID();
?>
<main class="main">
    <div class="single-vacancy">
        <div class="single-vacancy__container main-container">
            <div class="single-vacancy__breadcrumbs breadcrumbs">
                <div class="breadcrumbs__list">
                    <?php
                    if (qtranxf_getLanguage() == 'ru') {
                        ?>
                        <a class="breadcrumbs__item" href="<?php echo get_permalink(102); ?>">Главная</a> /
                        <a class="breadcrumbs__item" href="<?php echo get_permalink(1136); ?>">Вакансии в клинике</a> /
                        <span class="breadcrumbs__item current"><?php the_title();?></span>
                        <?php
                    } elseif (qtranxf_getLanguage() == 'ua') {
                        ?>
                        <a class="breadcrumbs__item" href="<?php echo get_permalink(102); ?>">Головна</a> /
                        <a class="breadcrumbs__item" href="<?php echo get_permalink(1136); ?>">Вакансії в клініці</a> /
                        <span class="breadcrumbs__item current"><?php the_title();?></span>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <h1 class="single-vacancy__title section-title"><?php the_title();?></h1>
            <div class="single-vacancy__content">
                <div class="single-vacancy__text">
                    <?php the_content();?>
                </div>
                <div class="single-vacancy__form">
                    <?php echo do_shortcode( '[contact-form-7 id="19b7e52" title="Форма на странице вакансии"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <section class="appointment-new">
        <div class="appointment-new__container main-container">
            <div class="appointment-new__content">
                <h2 class="appointment-new__title">
                    <?php the_field('zagolovok_bloka_podpiski' , 1136)?>
                </h2>
            </div>
            <div class="appointment-new__buttons">
                <a href="https://www.instagram.com/subareva_clinic/?igsh=bmZzZGdmcGY3ZzFw" class="button button-white">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9416 17.9512H4.23013C2.22678 17.9512 0.585938 16.361 0.585938 14.4111V4.49126C0.585938 2.54137 2.22678 0.951172 4.23013 0.951172H13.9416C15.9449 0.951172 17.5858 2.54137 17.5858 4.49126V14.4111C17.6049 16.361 15.964 17.9512 13.9416 17.9512ZM4.23013 2.40886C3.02812 2.40886 2.05506 3.33647 2.05506 4.49126V14.4111C2.05506 15.5659 3.02812 16.4935 4.23013 16.4935H13.9416C15.1436 16.4935 16.1166 15.5659 16.1166 14.4111V4.49126C16.1166 3.33647 15.1436 2.40886 13.9416 2.40886H4.23013Z" fill="#000125"/>
                        <path d="M9.09396 13.8619C6.6327 13.8619 4.64844 11.8741 4.64844 9.45095C4.64844 7.00886 6.65178 5.04004 9.09396 5.04004C11.5552 5.04004 13.5395 7.02779 13.5395 9.45095C13.5395 11.8741 11.5361 13.8619 9.09396 13.8619ZM9.09396 6.49772C7.45312 6.49772 6.11755 7.82289 6.11755 9.45095C6.11755 11.079 7.45312 12.4042 9.09396 12.4042C10.7348 12.4042 12.0704 11.079 12.0704 9.45095C12.0704 7.82289 10.7348 6.49772 9.09396 6.49772Z" fill="#000125"/>
                        <path d="M14.8956 4.81269C14.8956 5.38062 14.4377 5.85389 13.8462 5.85389C13.2739 5.85389 12.7969 5.39955 12.7969 4.81269C12.7969 4.24476 13.2548 3.77148 13.8462 3.77148C14.4377 3.77148 14.8956 4.24476 14.8956 4.81269Z" fill="#000125"/>
                    </svg>
                    <span><?php the_field('nadpis_na_knopke_instagramm', 1136)?></span>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61556572155925" class="button button-white">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6006_185)">
                            <path d="M9.61813 5.26329C9.61813 4.25751 10.4536 4.4099 10.4536 4.4099H13.1091V1.39258H9.14073C6.12716 1.39258 6.05256 4.77564 6.05256 4.77564V7.07673V7.09197H4.33691V9.85023H6.05256V18.3079H9.63305V9.85023H12.6615L13.124 7.03101L9.63305 7.06149V7.03101C9.61813 7.03101 9.61813 6.26906 9.61813 5.26329Z" fill="#000125"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_6006_185">
                                <rect width="17" height="17" fill="white" transform="translate(0.0859375 0.951172)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <span><?php the_field('nadpis_na_knopke_fejstbuk', 1136)?></span>
                </a>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="faq__container main-container">
            <div class="faq__text">
                <h2 class="faq__title section-title">
                    <?php the_field('zagolovok_bloka_voprosy_i_otvety', 1136)?>
                </h2>
                <div class="faq__list">
                    <?php
                    if( have_rows('perechen_voproov_i_otvetov' , 1136 )):
                        while( have_rows('perechen_voproov_i_otvetov' , 1136 ) ) : the_row();
                            $header = get_sub_field('vopros');
                            $desc = get_sub_field('otvet');
                            ?>
                            <div class="faq__item">
                                <div class="faq__item-header">
                                    <?php echo $header; ?>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6972 9.34005V0.451172H9.47493V9.34005H0.585938V11.5623H9.47493V20.4512H11.6972V11.5623H20.5859V9.34005H11.6972Z" fill="#000125"/>
                                    </svg>
                                </div>
                                <div class="faq__item-desc"><?php echo $desc; ?></div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="faq__img">
                <img src="<?php the_field('tzoyurazhenie_bloka_voprosy_i_otvety', 1136)?>" alt="<?php the_field('zagolovok_bloka_voprosy_i_otvety', 1136)?>">
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>
<?php wp_footer(); ?>
</body>
</html>