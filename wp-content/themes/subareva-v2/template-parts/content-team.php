<?php
$post_id = get_the_ID();
?>
<section class="team">
    <div class="team__container main-container">
        <h2 class="team__title section-title">
            <?php the_field('zagolovok_bloka_komanda' , $post_id)?>
                        <div class="current-team__btnt">
                            <div class="button js-vac">
                                <?php the_field('nadpis_stan_chastyu_komandy', 'option')?>
                            </div>
                        </div>
        </h2>
        <div class="team__list">
            <?php
            if( have_rows('nashi_sotrudniki') ):
                ?>
                    <?php
                    $counter =1;
                    while( have_rows('nashi_sotrudniki' , $post_id) ) : the_row();
                        $image = get_sub_field('fotografiya_sotrudnika');
                        $name = get_sub_field('fio_sotrudnika');
                        $work = get_sub_field('dolzhnost_sotrudnika');
//                        if ($counter == 1){
//                            echo '<div class="first-row">';
//                        } else if ($counter == 5){
//                            echo '<div class="second-row">';
//                        } else if ($counter == 7){
//                            echo '<div class="third-row">';
//                        } else if ($counter == 8){
//                            echo '<div class="four-row">';
//                        }
//                        ?>
                        <div class="team__item">
                            <div class="team__photo">
                                <img src="<?php echo $image?>" alt="<?php echo $name?>">
                            </div>
                            <div class="team__person">
                                <p class="team__name"><?php echo $name?></p>
                                <p class="team__work"><?php echo $work?></p>
                            </div>
                        </div>
                    <?php
//                        if ($counter == 4){
//                            echo '</div>';
//                        } else if($counter == 6){
//                            echo '</div>';
//                        } else if($counter == 7){
//                            echo '</div>';
//                        } else if($counter == 11){
//                            echo '</div>';
//                        }
//
//                        $counter ++;
                    endwhile;
                    ?>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
