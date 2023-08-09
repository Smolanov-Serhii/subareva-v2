<?php
$post_id = get_the_ID();
?>
<section class="maps">
    <div class="maps__container tabs-elements">
        <div class="maps__left padding-left-part">
            <h1 class="maps__title section-title">
                <?php the_field('zagolovok_straniczy' , $post_id)?>
            </h1>
            <div class="maps__list">
                <?php
                if( have_rows('lokaczii') ):
                    ?>
                    <?php
                    while( have_rows('lokaczii') ) : the_row();
                        $title = get_sub_field('gorod');
                        $adress = get_sub_field('adress');
                        $phone = get_sub_field('telefon');
                        $icons = get_sub_field('telefon_копия');
                        $time = get_sub_field('grafik_raboty');
                        ?>
                        <div class="maps__item tabs-nav-item" data-x="" data-y="" data-icon="">
                            <div class="maps__item-triger">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 10L12 15L17 10" stroke="#845472" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="maps__item-title">
                                <?php echo $title?>
                            </h3>
                            <div class="maps__item-adress maps__item-row">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19.5C9.65 17.7667 7.89567 16.0833 6.737 14.45C5.579 12.8167 5 11.2167 5 9.65C5 8.46667 5.21267 7.429 5.638 6.537C6.06267 5.64567 6.60833 4.9 7.275 4.3C7.94167 3.7 8.69167 3.25 9.525 2.95C10.3583 2.65 11.1833 2.5 12 2.5C12.8167 2.5 13.6417 2.65 14.475 2.95C15.3083 3.25 16.0583 3.7 16.725 4.3C17.3917 4.9 17.9377 5.64567 18.363 6.537C18.7877 7.429 19 8.46667 19 9.65C19 11.2167 18.4207 12.8167 17.262 14.45C16.104 16.0833 14.35 17.7667 12 19.5ZM12 11.5C12.55 11.5 13.021 11.304 13.413 10.912C13.8043 10.5207 14 10.05 14 9.5C14 8.95 13.8043 8.479 13.413 8.087C13.021 7.69567 12.55 7.5 12 7.5C11.45 7.5 10.9793 7.69567 10.588 8.087C10.196 8.479 10 8.95 10 9.5C10 10.05 10.196 10.5207 10.588 10.912C10.9793 11.304 11.45 11.5 12 11.5ZM5 22.5V20.5H19V22.5H5Z" fill="#A9B3C0"/>
                                </svg>
                                <?php echo $adress?>
                            </div>
                            <a href="tel:<?php echo $phone?>" class="maps__item-phone maps__item-row">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5H17C17 11.1739 16.4732 9.90215 15.5355 8.96447C14.5979 8.02678 13.3261 7.5 12 7.5V9.5C12.7956 9.5 13.5587 9.81607 14.1213 10.3787C14.6839 10.9413 15 11.7044 15 12.5ZM19 12.5H21C21 7.5 16.97 3.5 12 3.5V5.5C15.86 5.5 19 8.63 19 12.5ZM20 16C18.75 16 17.55 15.8 16.43 15.43C16.08 15.32 15.69 15.4 15.41 15.68L13.21 17.88C10.3733 16.4333 8.06671 14.1267 6.62 11.29L8.82 9.09C9.1 8.81 9.18 8.42 9.07 8.07C8.69065 6.91806 8.49821 5.7128 8.5 4.5C8.5 4.23478 8.39464 3.98043 8.20711 3.79289C8.01957 3.60536 7.76522 3.5 7.5 3.5H4C3.73478 3.5 3.48043 3.60536 3.29289 3.79289C3.10536 3.98043 3 4.23478 3 4.5C3 9.00868 4.79107 13.3327 7.97918 16.5208C11.1673 19.7089 15.4913 21.5 20 21.5C20.2652 21.5 20.5196 21.3946 20.7071 21.2071C20.8946 21.0196 21 20.7652 21 20.5V17C21 16.7348 20.8946 16.4804 20.7071 16.2929C20.5196 16.1054 20.2652 16 20 16Z" fill="#A9B3C0"/>
                                </svg>
                                <?php echo $phone?>
                                <?php
                                    if ($icons){
                                        ?>
                                            <img src="<?php echo $icons?>" alt="icon">
                                        <?php
                                    }
                                ?>
                            </a>
                            <div class="maps__item-time maps__item-row">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.55 17.05L11 13.5V8.5H13V12.675L15.95 15.625L14.55 17.05ZM11 6.5V4.5H13V6.5H11ZM18 13.5V11.5H20V13.5H18ZM11 20.5V18.5H13V20.5H11ZM4 13.5V11.5H6V13.5H4ZM12 22.5C10.6167 22.5 9.31667 22.2373 8.1 21.712C6.88333 21.1867 5.825 20.4743 4.925 19.575C4.025 18.675 3.31267 17.6167 2.788 16.4C2.26333 15.1833 2.00067 13.8833 2 12.5C2 11.1167 2.26267 9.81667 2.788 8.6C3.31333 7.38333 4.02567 6.325 4.925 5.425C5.825 4.525 6.88333 3.81267 8.1 3.288C9.31667 2.76333 10.6167 2.50067 12 2.5C13.3833 2.5 14.6833 2.76267 15.9 3.288C17.1167 3.81333 18.175 4.52567 19.075 5.425C19.975 6.325 20.6877 7.38333 21.213 8.6C21.7383 9.81667 22.0007 11.1167 22 12.5C22 13.8833 21.7373 15.1833 21.212 16.4C20.6867 17.6167 19.9743 18.675 19.075 19.575C18.175 20.475 17.1167 21.1877 15.9 21.713C14.6833 22.2383 13.3833 22.5007 12 22.5ZM12 20.5C14.2333 20.5 16.125 19.725 17.675 18.175C19.225 16.625 20 14.7333 20 12.5C20 10.2667 19.225 8.375 17.675 6.825C16.125 5.275 14.2333 4.5 12 4.5C9.76667 4.5 7.875 5.275 6.325 6.825C4.775 8.375 4 10.2667 4 12.5C4 14.7333 4.775 16.625 6.325 18.175C7.875 19.725 9.76667 20.5 12 20.5Z" fill="#A9B3C0"/>
                                </svg>
                                <?php echo $time?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div class="maps__right">
            <div class="maps__right-maps">
                <?php
                if( have_rows('lokaczii') ):
                    ?>
                    <?php
                    while( have_rows('lokaczii') ) : the_row();
                        $map = get_sub_field('kod_karty');
                        ?>
                        <div class="maps__right-item tabs-content-item" data-x="" data-y="" data-icon="">
                            <?php echo $map?>
                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
