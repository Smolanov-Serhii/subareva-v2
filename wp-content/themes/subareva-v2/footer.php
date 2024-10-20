<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subareva-v2
 */

?>

	<footer class="footer">
        <div class="footer__container main-container">
            <div class="footer__brend">
                <h3 class="footer__title">
                    <?php the_field('zagolovok_v_futere', 'option')?>
                </h3>
                <?php
                if( have_rows('soczialnye_seti', 'option') ):
                    ?>
                    <div class="footer__socials">
                        <?php
                        while( have_rows('soczialnye_seti', 'option') ) : the_row();
                            $icon = get_sub_field('ikonka_soczialnoj_seti');
                            $lnk = get_sub_field('ssylka_na_soczialnuyu_set');
                            if ($lnk > ''){
                            ?>
                                <a href="<?php echo $lnk;?>" class="footer__socials-item">
                                    <img src="<?php echo $icon?>">
                                </a>

                            <?php
                            }
                            endwhile;
                        ?>
                    </div>
                <?php
                endif;
                ?>
                <div class="footer__text">
                    <?php the_field('opisanie_v_futere', 'option')?>
                </div>
                <div class="footer__button">
                    <div class="button js-write">
                        <span>
                            <?php the_field('tekst_napisat_nam', 'option')?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer__nav">
                <div class="footer__nav-list" style="display: none;">
                    <h4 class="footer__nav-name">
                        <?php the_field('tekst_bloka_uslug_stomalogii' , 2)?>
                    </h4>
                    <?php
                    $args = array(
                        'post_type' 	 => 'dentistry'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_permalink();?>" class="footer__nav-item"><?php the_title();?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="footer__nav-list" style="display: none;">
                    <h4 class="footer__nav-name">
                        <?php the_field('tekst_bloka_uslug_kosmetologii' , 2)?>
                    </h4>
                    <?php
                    $args = array(
                        'post_type' 	 => 'cosmetology'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_permalink();?>" class="footer__nav-item"><?php the_title();?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="footer__nav-list">
                    <h4 class="footer__nav-name">
                        <?php the_field('tekst_kontakty', 'option')?>
                    </h4>
                    <a href="tel:<?php the_field('nomer_v_futer', 'option')?>" class="footer__nav-item"><?php the_field('nomer_v_futer', 'option')?></a>
                    <div class="footer__nav-item" style="display: none;"><?php the_field('adress_v_futer_1', 'option')?></div>
                    <div class="footer__nav-item"><?php the_field('adress_v_futer_2', 'option')?></div>
                    <div class="footer__nav-item" style="display: none;"><?php the_field('adress_v_futer_3', 'option')?></div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="left">
                    © <?php echo date('Y');?>. Subareva Clinic
                </div>
<!--                <div class="right">-->
<!--                    <a href="#">Privacy Policy</a>-->
<!--                    <span>|</span>-->
<!--                    <a href="#">Terms</a>-->
<!--                    <span>|</span>-->
<!--                    <a href="#">Правила сертифікатів</a>-->
<!--                </div>-->
            </div>
        </div>
	</footer>
<div id="success-send" class="success-send" style="display: none">
    <div class="success-send__container">
        <?php the_field('tekst_vash_zapros_otpravlen', 'option')?>
    </div>
</div>
<div class="popup-zapis" style="display: none">
    <div class="popup-zapis__container">
        <div class="popup-zapis__close">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="26" height="26" fill="#000125"/>
                <rect x="7.34277" y="17.2426" width="14" height="2" transform="rotate(-45 7.34277 17.2426)" fill="white"/>
                <rect x="17.2432" y="18.6569" width="14" height="2" transform="rotate(-135 17.2432 18.6569)" fill="white"/>
            </svg>
        </div>
<!--        --><?php //echo do_shortcode( '[contact-form-7 id="64bcc87" title="Записаться"]' ); ?>
        <?php echo do_shortcode( '[contact-form-7 id="52a1437" title="Записаться_copy"]' ); ?>

    </div>
</div>
<div class="popup-write" style="display: none">
    <div class="popup-write__container">
        <div class="popup-write__close">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="26" height="26" fill="#000125"/>
                <rect x="7.34277" y="17.2426" width="14" height="2" transform="rotate(-45 7.34277 17.2426)" fill="white"/>
                <rect x="17.2432" y="18.6569" width="14" height="2" transform="rotate(-135 17.2432 18.6569)" fill="white"/>
            </svg>
        </div>
        <?php echo do_shortcode( '[contact-form-7 id="af3d117" title="Написать нам"]' ); ?>
    </div>
</div>
<div class="popup-vac" style="display: none">
    <div class="popup-vac__block">
        <div class="popup-vac__container">
            <div class="popup-vac__close">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65777 8.45166L15.9432 2.16626L14.3718 0.594912L8.08642 6.88031L1.80084 0.594727L0.229492 2.16607L6.51508 8.45166L0.229688 14.737L1.80104 16.3084L8.08642 10.023L14.3716 16.3082L15.943 14.7369L9.65777 8.45166Z" fill="#A9B3C0"/>
                </svg>
            </div>
            <div class="popup-vac__wrapper">
                <?php echo do_shortcode( '[contact-form-7 id="c46c1a7" title="Форма вакансий попап"]' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="messengers">
    <div class="messengers__links" style="display: none">
        <a href="viber://chat?number=%2B380987006700">
            <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="46" cy="46" r="46" fill="#C154BD" fill-opacity="0.11"/>
                <circle cx="46" cy="46" r="39" fill="#C154BD" fill-opacity="0.22"/>
                <circle cx="46" cy="46" r="32" fill="#C154BD"/>
                <path d="M40.9561 38.7525C40.7237 38.7187 40.4869 38.7654 40.2848 38.885H40.2673C39.7986 39.16 39.3761 39.5063 39.0161 39.9138C38.7161 40.26 38.5536 40.61 38.5111 40.9475C38.4861 41.1475 38.5036 41.35 38.5623 41.5412L38.5848 41.5538C38.9223 42.545 39.3623 43.4988 39.8998 44.3962C40.5929 45.6569 41.4458 46.8227 42.4373 47.865L42.4673 47.9075L42.5148 47.9425L42.5436 47.9763L42.5786 48.0062C43.6245 49.0008 44.7931 49.8577 46.0561 50.5563C47.4998 51.3425 48.3761 51.7137 48.9023 51.8687V51.8763C49.0561 51.9237 49.1961 51.945 49.3373 51.945C49.7855 51.9119 50.2097 51.7297 50.5423 51.4275C50.9486 51.0675 51.2923 50.6438 51.5598 50.1725V50.1638C51.8111 49.6888 51.7261 49.2413 51.3636 48.9375C50.6354 48.3013 49.8481 47.7362 49.0123 47.25C48.4523 46.9462 47.8836 47.13 47.6536 47.4375L47.1623 48.0575C46.9098 48.365 46.4523 48.3225 46.4523 48.3225L46.4398 48.33C43.0261 47.4588 42.1148 44.0025 42.1148 44.0025C42.1148 44.0025 42.0723 43.5325 42.3886 43.2925L43.0036 42.7975C43.2986 42.5575 43.5036 41.99 43.1873 41.43C42.7043 40.5935 42.1404 39.8063 41.5036 39.08C41.3647 38.9091 41.1699 38.7926 40.9536 38.7513L40.9561 38.7525ZM46.7248 37.25C46.5591 37.25 46.4001 37.3158 46.2829 37.4331C46.1657 37.5503 46.0998 37.7092 46.0998 37.875C46.0998 38.0408 46.1657 38.1997 46.2829 38.3169C46.4001 38.4342 46.5591 38.5 46.7248 38.5C48.3048 38.5 49.6173 39.0162 50.6561 40.0062C51.1898 40.5475 51.6061 41.1888 51.8786 41.8913C52.1523 42.595 52.2773 43.3463 52.2448 44.0988C52.2379 44.2645 52.297 44.4262 52.4093 44.5484C52.5216 44.6705 52.6778 44.743 52.8436 44.75C53.0093 44.757 53.1711 44.6978 53.2932 44.5855C53.4153 44.4732 53.4879 44.317 53.4948 44.1512C53.5336 43.2256 53.3799 42.302 53.0436 41.4387C52.7057 40.5714 52.1935 39.7826 51.5386 39.1213L51.5261 39.1087C50.2373 37.8775 48.6073 37.25 46.7248 37.25Z" fill="white"/>
                <path d="M46.6816 39.305C46.5159 39.305 46.3569 39.3708 46.2397 39.488C46.1225 39.6052 46.0566 39.7642 46.0566 39.93C46.0566 40.0957 46.1225 40.2547 46.2397 40.3719C46.3569 40.4891 46.5159 40.555 46.6816 40.555H46.7029C47.8429 40.6362 48.6729 41.0162 49.2541 41.64C49.8504 42.2825 50.1591 43.0812 50.1354 44.0687C50.1316 44.2345 50.1938 44.395 50.3083 44.5149C50.4228 44.6348 50.5803 44.7043 50.746 44.7081C50.9118 44.7119 51.0723 44.6497 51.1922 44.5352C51.3121 44.4207 51.3816 44.2632 51.3854 44.0975C51.4154 42.8012 50.9979 41.6825 50.1704 40.79V40.7875C49.3241 39.88 48.1629 39.4 46.7654 39.3062L46.7441 39.3037L46.6816 39.305Z" fill="white"/>
                <path d="M46.6575 41.3987C46.5738 41.3913 46.4896 41.4008 46.4097 41.4267C46.3298 41.4526 46.256 41.4944 46.1926 41.5495C46.1292 41.6045 46.0776 41.6718 46.0408 41.7473C46.004 41.8228 45.9828 41.9049 45.9784 41.9887C45.974 42.0726 45.9866 42.1564 46.0154 42.2353C46.0441 42.3142 46.0885 42.3865 46.1458 42.4479C46.2031 42.5092 46.2722 42.5584 46.3489 42.5925C46.4257 42.6266 46.5085 42.6448 46.5925 42.6462C47.115 42.6737 47.4487 42.8312 47.6587 43.0424C47.87 43.2549 48.0275 43.5962 48.0562 44.1299C48.0578 44.2138 48.0762 44.2965 48.1104 44.3731C48.1446 44.4497 48.1939 44.5186 48.2553 44.5758C48.3167 44.6329 48.389 44.6771 48.4678 44.7058C48.5467 44.7344 48.6305 44.7469 48.7143 44.7424C48.798 44.738 48.88 44.7167 48.9554 44.6799C49.0308 44.6431 49.098 44.5914 49.153 44.5281C49.208 44.4648 49.2497 44.391 49.2756 44.3112C49.3015 44.2314 49.3111 44.1472 49.3037 44.0637C49.2637 43.3137 49.0287 42.6512 48.5475 42.1637C48.0637 41.6762 47.405 41.4387 46.6575 41.3987Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8335 33.9801C43.8111 33.091 47.9359 33.091 51.9135 33.9801L52.3373 34.0738C53.5 34.3338 54.5679 34.911 55.4223 35.7414C56.2768 36.5717 56.8842 37.6227 57.1773 38.7776C58.1869 42.7562 58.1869 46.924 57.1773 50.9026C56.8842 52.0574 56.2768 53.1084 55.4223 53.9388C54.5679 54.7692 53.5 55.3464 52.3373 55.6063L51.9123 55.7001C49.421 56.2572 46.8647 56.4671 44.316 56.3238L40.9998 59.2913C40.8747 59.4033 40.722 59.4796 40.5574 59.5123C40.3928 59.5451 40.2224 59.5331 40.0641 59.4775C39.9057 59.422 39.7652 59.3249 39.6571 59.1965C39.5491 59.0681 39.4775 58.9131 39.4498 58.7476L38.901 55.4701C37.8487 55.1427 36.898 54.5508 36.1397 53.7512C35.3814 52.9515 34.8409 51.9707 34.5698 50.9026C33.5601 46.924 33.5601 42.7562 34.5698 38.7776C34.8628 37.6227 35.4703 36.5717 36.3247 35.7414C37.1791 34.911 38.247 34.3338 39.4098 34.0738L39.8335 33.9801ZM51.5048 35.8088C47.7964 34.9798 43.9507 34.9798 40.2423 35.8088L39.8173 35.9038C38.9932 36.0884 38.2363 36.4978 37.6309 37.0865C37.0254 37.6752 36.5949 38.4202 36.3873 39.2388C35.4544 42.9147 35.4544 46.7654 36.3873 50.4413C36.595 51.2601 37.0257 52.0052 37.6314 52.5939C38.2371 53.1827 38.9942 53.592 39.8185 53.7763L39.931 53.8013C40.113 53.842 40.2787 53.9361 40.407 54.0715C40.5352 54.2068 40.6202 54.3774 40.651 54.5613L41.0185 56.7588L43.3585 54.6651C43.452 54.5812 43.5613 54.517 43.68 54.4762C43.7988 54.4354 43.9245 54.4189 44.0498 54.4276C46.5486 54.6048 49.0599 54.4175 51.5048 53.8713L51.9285 53.7763C52.7528 53.592 53.5099 53.1827 54.1156 52.5939C54.7214 52.0052 55.152 51.2601 55.3598 50.4413C56.2923 46.7663 56.2923 42.9151 55.3598 39.2388C55.152 38.4201 54.7214 37.6749 54.1156 37.0862C53.5099 36.4975 52.7528 36.0882 51.9285 35.9038L51.5048 35.8088Z" fill="white"/>
            </svg>
        </a>
        <a href="https://t.me/subareva_clinic1">
            <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="46" cy="46" r="46" fill="#67C1F4" fill-opacity="0.11"/>
                <circle cx="46" cy="46" r="39" fill="#67C1F4" fill-opacity="0.22"/>
                <circle cx="46" cy="46" r="32" fill="#67C1F4"/>
                <g clip-path="url(#clip0_2416_996)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55.7213 36.5375C56.0302 36.4074 56.3683 36.3626 56.7004 36.4076C57.0325 36.4526 57.3465 36.5858 57.6097 36.7933C57.8728 37.0008 58.0756 37.2751 58.1968 37.5876C58.318 37.9 58.3532 38.2393 58.2988 38.57L55.4638 55.7662C55.1888 57.425 53.3688 58.3762 51.8476 57.55C50.5751 56.8587 48.6851 55.7937 46.9851 54.6825C46.1351 54.1262 43.5313 52.345 43.8513 51.0775C44.1263 49.9937 48.5013 45.9212 51.0013 43.5C51.9826 42.5487 51.5351 42 50.3763 42.875C47.4976 45.0475 42.8788 48.3512 41.3513 49.2812C40.0038 50.1012 39.3013 50.2412 38.4613 50.1012C36.9288 49.8462 35.5076 49.4512 34.3476 48.97C32.7801 48.32 32.8563 46.165 34.3463 45.5375L55.7213 36.5375Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_2416_996">
                        <rect width="30" height="30" fill="white" transform="translate(31 31)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    <div class="messengers__button">
        <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M92 46C92 71.4051 71.4051 92 46 92C20.5949 92 0 71.4051 0 46C0 20.5949 20.5949 0 46 0C71.4051 0 92 20.5949 92 46Z" fill="#000125" fill-opacity="0.11"/>
            <path d="M85 46C85 67.5391 67.5391 85 46 85C24.4609 85 7 67.5391 7 46C7 24.4609 24.4609 7 46 7C67.5391 7 85 24.4609 85 46Z" fill="#000125" fill-opacity="0.22"/>
            <path d="M78 46C78 63.6731 63.6731 78 46 78C28.3269 78 14 63.6731 14 46C14 28.3269 28.3269 14 46 14C63.6731 14 78 28.3269 78 46Z" fill="#000125"/>
        </svg>
        <div class="normal">
            <svg width="38" height="32" viewBox="0 0 38 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.45455 16C1.55455 16 0 14.4 0 12.4444V3.55556C0 1.6 1.55455 0 3.45455 0H17.2727C19.1727 0 20.7273 1.6 20.7273 3.55556V12.4444C20.7273 14.4 19.1727 16 17.2727 16H13.8182V21.3333L8.63636 16H3.45455ZM34.5455 26.6667C36.4455 26.6667 38 25.0667 38 23.1111V14.2222C38 12.2667 36.4455 10.6667 34.5455 10.6667H24.1818V12.4444C24.1818 16.3556 21.0727 19.5556 17.2727 19.5556V23.1111C17.2727 25.0667 18.8273 26.6667 20.7273 26.6667H24.1818V32L29.3636 26.6667H34.5455Z" fill="white"/>
            </svg>
        </div>
        <div class="active" style="display: none">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 23.75L6.25 22L13.25 15L6.25 8L8 6.25L15 13.25L22 6.25L23.75 8L16.75 15L23.75 22L22 23.75L15 16.75L8 23.75Z" fill="white"/>
            </svg>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
