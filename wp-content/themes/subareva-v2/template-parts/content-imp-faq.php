<?php
$post_id = get_the_ID();
if ($post_id == 646 || $post_id == 544){
    $post_id = 822;
}
?>
<section class="imp-faq">
    <div class="imp-faq__container padding-left-part">
        <div class="imp-faq__text">
            <h2 class="imp-faq__title section-title">
                <?php the_field('zagolovok_pochemu_stoit_vybrat_nashu_kliniku', $post_id)?>
            </h2>
            <div class="imp-faq__desc">
                <?php the_field('kontent_pochemu_stoit_vybrat', $post_id)?>
            </div>
        </div>
    </div>
    <div class="imp-faq__img">
        <img src="<?php echo the_field('kartinka_pochemu_stoit_vybrat', $post_id)?>" alt="<?php the_field('zagolovok_pochemu_stoit_vybrat_nashu_kliniku', $post_id)?>">
    </div>
</section>