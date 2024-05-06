<?php
$post_id = get_the_ID();
$post_id = 102;
?>
<section class="premium">
    <div class="premium__decoration">
        <svg width="997" height="299" viewBox="0 0 997 299" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.4">
                <path d="M559.076 28.635C546.223 19.2225 533.37 12.1631 518.18 7.45686C504.158 2.75059 488.968 0.397461 473.778 0.397461C455.082 0.397461 436.387 3.92716 418.86 10.9866C401.333 18.0459 386.143 28.635 372.121 42.7538C358.099 56.8726 347.583 72.168 340.572 89.8165C333.562 107.465 330.056 127.467 330.056 148.645C330.056 169.823 333.562 188.648 340.572 207.473C347.583 225.122 358.099 241.593 372.121 255.712C386.143 269.831 401.333 280.42 418.86 287.48C436.387 294.539 455.082 298.069 473.778 298.069C493.642 298.069 511.169 294.539 528.696 287.48C546.223 280.42 561.413 269.831 575.435 255.712C589.456 241.593 599.973 226.298 606.983 208.65C613.994 191.001 617.5 170.999 617.5 149.821C617.5 125.113 612.826 102.759 602.31 81.5805C591.793 60.4023 577.772 42.7538 559.076 28.635ZM536.875 242.77C520.517 266.301 499.484 279.244 473.778 279.244C448.072 279.244 427.039 267.478 410.681 242.77C394.322 219.239 386.143 187.471 386.143 148.645C386.143 109.818 394.322 78.0508 410.681 54.5195C427.039 30.9882 448.072 18.0459 473.778 18.0459C499.484 18.0459 520.517 29.8116 536.875 54.5195C553.234 78.0508 561.413 109.818 561.413 148.645C561.413 187.471 553.234 219.239 536.875 242.77Z" fill="#EEEEEE"/>
                <path d="M196.853 200.413L122.071 7.45584H67.1526L112.723 120.406L81.1742 202.766L5.22371 7.45584H-49.6943L67.1526 296.891L124.408 146.291L184 296.891L295.004 7.45584H268.129L196.853 200.413Z" fill="#EEEEEE"/>
                <path d="M897.933 200.413L821.983 7.45584H768.233L813.804 120.406L782.255 202.766L706.304 7.45584H651.386L768.233 296.891L824.32 146.291L883.912 296.891L996.085 7.45584H969.21L897.933 200.413Z" fill="#EEEEEE"/>
            </g>
        </svg>
    </div>
    <div class="premium__container padding-left-part">
        <?php
            if (get_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)){
                ?>
<!--                    <div class="premium__title section-title">-->
<!--                        --><?php //the_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)?>
<!--                    </div>-->
                <?php
            }
        ?>
        <div class="premium__wrapper">
            <div class="premium__text">
                <svg width="660" height="53" viewBox="0 0 660 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M149.59 50.7845H145.175L166.259 0.218314L188.226 50.7845H177.978L172.627 37.5833H154.861L149.59 50.7845ZM163.851 16.3274L156.332 34.3923H171.476L163.851 16.3274ZM12.4622 17.4597C13.7732 18.7207 16.2616 20.2132 19.7667 21.7057C25.5194 24.0217 29.3188 26.415 31.0847 28.4994C32.8774 30.5838 33.7336 33.4145 33.7336 36.7855C33.7336 41.2631 31.9409 44.8401 28.8372 47.8252C25.4926 50.5787 21.5326 52.0712 16.6629 52.0712C13.1043 52.0712 10.2146 51.4021 7.59246 50.1412C5.18437 48.6229 2.91006 46.6929 0.90332 43.9394L4.86329 41.3918C6.17436 43.4762 7.51219 45.2004 9.27813 46.3069C11.0708 47.362 13.0776 48.031 15.0308 48.031C17.6797 48.031 19.9272 47.2076 21.6932 45.4834C23.4859 43.7593 24.3421 41.6749 24.3421 39.153C24.3421 34.907 20.5426 31.33 12.7832 28.345H12.5424C8.42192 26.5436 5.55896 24.8452 3.76627 22.7608C2.00034 20.6507 1.14413 18.0516 1.14413 14.9121C1.14413 10.6661 2.69601 7.01194 5.55896 4.23273C8.42192 1.47925 12.2213 0.19258 17.1178 0.19258C20.6764 0.19258 23.7802 1.01605 26.1883 2.50859C28.8372 4.23273 30.8439 6.31714 32.155 9.07062L28.8104 11.2322C27.9542 8.91622 26.8037 7.19208 25.011 5.93114C23.4859 4.69593 21.4791 4.02686 19.071 4.02686C16.4221 4.02686 14.4154 4.69593 12.8635 6.34287C11.3116 7.83541 10.4554 9.76542 10.4554 12.313C10.4554 14.243 11.1511 15.9672 12.4622 17.4597ZM76.785 43.3218C78.3368 41.0058 79.193 36.9914 79.193 31.2271H79.4338V1.24765H84.0895V32.8741C84.0895 39.2045 82.7784 44.1453 79.6747 47.3362C76.5709 50.5529 71.9153 52.2513 65.9485 52.2513C63.2996 52.2513 60.5972 51.5823 58.1891 50.7588C55.5402 49.9353 53.5335 48.6744 51.9816 46.9502C50.4297 45.2261 49.3327 43.5277 48.637 41.4176C47.9414 39.3331 47.54 36.5025 47.54 32.9255V1.47925H57.0921V31.2528C57.0921 36.9914 57.7878 41.0316 59.5002 43.3476C61.2929 45.6636 64.1558 46.7701 68.1961 46.7701C72.1293 46.7701 75.019 45.715 76.785 43.3218ZM134.526 29.0912C132.733 27.0068 130.111 25.2827 126.525 24.382C129.388 23.7129 131.636 22.452 133.188 20.5735C134.74 18.6435 135.435 16.5333 135.435 13.7798C135.435 11.4638 134.74 9.30222 133.643 7.44941C132.546 5.5194 130.78 4.02686 128.746 2.97179C127.649 2.30272 125.883 1.91672 123.85 1.71085C121.602 1.47925 118.953 1.27338 115.85 1.27338H100.572V50.8103H118.82C125.027 50.8103 129.683 49.7552 132.786 47.5936C135.89 45.5092 137.201 42.0609 137.201 37.609C137.389 34.2379 136.559 31.4844 134.526 29.0912ZM110.311 4.46433H114.11C118.311 4.46433 121.415 5.2878 123.422 6.78034C125.428 8.27288 126.525 10.5889 126.525 13.7798C126.525 17.2024 125.669 19.5184 123.877 21.0109C122.084 22.5035 119.221 23.3269 115.02 23.3269H110.364V4.46433H110.311ZM125.214 45.2776C123.422 46.7701 120.318 47.5936 116.358 47.5936H110.311V26.3378H114.967C119.381 26.3378 122.726 27.3928 124.974 29.3228C127.221 31.2528 128.318 34.2379 128.318 38.2781C128.077 41.469 127.248 43.785 125.214 45.2776ZM231.518 24.2276C233.766 22.1432 235.077 19.3125 235.077 15.7356C235.077 11.0264 233.525 7.44941 230.18 4.92753C226.836 2.61152 221.966 1.35058 215.518 1.35058H198.688V50.8875H208.24V4.46433H212.2C216.615 4.46433 219.959 5.2878 222.207 7.21781C224.454 8.94195 225.551 11.6954 225.551 15.504C225.551 18.9265 224.454 21.2425 222.207 22.9667C219.959 24.4592 216.24 25.5143 210.648 25.9518L224.374 51.0161H234.997L221.27 27.8046C225.953 27.4443 229.271 26.1062 231.518 24.2276ZM280.804 50.7845H248.83V1.24765H280.804V4.8246H258.382V23.0953H279.011V26.6723H258.382V46.8988H280.804V50.7845ZM312.082 35.0614L298.356 1.27338H288.349L309.701 52.0712L330.116 1.27338H325.22L312.082 35.0614ZM335.441 50.7845H330.785L352.057 0.218314L374.024 50.7845H363.776L358.425 37.5833H340.658L335.441 50.7845ZM349.648 16.3274L342.13 34.3923H357.274L349.648 16.3274ZM450.36 37.223C448.567 40.7999 446.4 43.4248 443.698 45.2776C441.049 47.2076 437.945 48.031 434.386 48.031C429.276 48.031 425.075 46.101 422.212 42.2925C419.349 38.4839 418.011 33.1828 418.011 26.3378C418.011 19.3383 419.563 13.574 422.426 9.55955C425.53 5.5194 429.57 3.35779 434.601 3.35779C437.704 3.35779 440.353 4.18126 442.815 5.6738C445.223 7.16634 447.23 9.48235 448.782 12.4674L451.885 10.383C449.879 6.96047 447.23 4.41286 443.885 2.68872C440.808 0.964583 437.009 0.141113 432.594 0.141113C425.45 0.141113 419.483 2.68872 414.587 7.60381C409.69 12.5189 407.443 18.6435 407.443 26.1062C407.443 33.8005 409.851 39.8993 414.587 44.8401C419.242 49.7552 425.209 52.0712 432.353 52.0712C437.009 52.0712 441.209 51.0161 444.768 48.6486C448.327 46.3326 451.216 43.116 453.223 39.1015L450.36 37.223ZM475.03 47.0017H497.211V50.8103H465.237V1.24765H475.003V47.0017H475.03ZM516.797 1.24765H507.245V50.7845H516.797V1.24765ZM542.697 1.24765L569.32 35.4989V1.24765H573.975V50.7845H569.32L538.443 11.258V50.7845H533.787V1.24765H542.697ZM600.919 1.24765H591.367V50.7845H600.919V1.24765ZM650.419 45.2776C653.068 43.3476 655.315 40.7999 657.081 37.223L659.944 39.153C657.938 43.1932 655.048 46.3841 651.489 48.7001C647.931 51.0161 643.73 52.1227 639.074 52.1227C631.93 52.1227 625.964 49.8067 621.308 44.8916C616.652 39.9765 614.164 33.8519 614.164 26.1576C614.164 18.6949 616.411 12.5704 621.308 7.65528C626.204 2.74019 632.171 0.19258 639.315 0.19258C643.73 0.19258 647.529 1.01605 650.633 2.74019C653.978 4.46433 656.6 6.98621 658.633 10.4345L655.53 12.5189C653.978 9.53382 651.971 7.21781 649.563 5.72527C647.155 4.23273 644.452 3.40926 641.349 3.40926C636.238 3.40926 632.278 5.49367 629.174 9.61102C626.311 13.6512 624.759 19.3897 624.759 26.3892C624.759 33.1828 626.07 38.4839 628.96 42.344C631.823 46.1525 636.104 48.0825 641.134 48.0825C644.586 48.031 647.69 47.1304 650.419 45.2776Z" fill="#25303B"/>
                </svg>
                <?php the_field('opisanie_premialnyh' , $post_id)?>
            </div>
            <?php
            $counter = 1;
            if( have_rows('galereya_primealnyh' , $post_id )):
                ?>
                <div class="premium__images swiper">
                    <div class="premium__list swiper-wrapper">
                        <?php
                        while( have_rows('galereya_primealnyh' , $post_id ) ) : the_row();
                            $image = get_sub_field('kartinka_dlya_premialnyh');
                            if ($counter == 1 || $counter == 4 || $counter == 7){
                                echo '<div class="premium__list-group swiper-slide">';
                            }
                            ?>
                            <div class="premium__item">
                                <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)?>">
                            </div>
                        <?php
                        if ($counter == 3 || $counter == 6 || $counter == 9){
                            echo '</div>';
                        }
                        $counter++;
                        endwhile
                        ?>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
