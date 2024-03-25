<?php
$post_id = get_the_ID();
?>
<section class="our-services">
    <div class="our-services__img">
        <img src="<?php echo the_field('kartinka_na_nashi_uslugi' , $post_id)?>" alt="<?php the_field('nashi_uslugi_zagolovok' , $post_id)?>">
    </div>
    <div class="our-services__container padding-left-part">
        <div class="our-services__title section-title">
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
                    ?>
                    <div class="our-services__item">
                        <?php echo $title;?>
                        <?php
                        if ($lnk){
                            ?>
                            <a href="<?php echo $lnk; ?>"><?php the_field('tekst_detalnej', 'options')?></a>
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
