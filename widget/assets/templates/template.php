<div class="obpress-incentives-holder">
    <div class="obpress-incentives-swiper"  data-allow-loop="<?= $settings_incentives['incentives_allow_loop']; ?>" data-centered-slides="<?= $settings_incentives['incentives_center_slides']; ?>" data-slides-per-view="<?= $settings_incentives['incentives_slides_per_view']['size']; ?>" data-space-between="<?= $settings_incentives['incentives_slider_space_between']['size']; ?>" data-transition="<?= $settings_incentives['incentives_slider_transition']['size']; ?>" data-pagination="<?= $settings_incentives['so_slide_pagination'] ?>">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if (isset($incentives) && $incentives != null) : ?>
                    <?php
                        $incentive_slides = $settings_incentives['incentives_number_of_slides'];
                        $incentive_slide = 0;
                    ?>

                    <?php foreach ($incentives as $key=>$incentive_per_hotel) : ?>
                        <div class="swiper-slide">
                            <div class="obpress-incentive">
                                <?php if ($incentive_per_hotel->Discount->DiscountCode == 3) : ?>
                                    <h4><?= $incentive_per_hotel->Discount->NightsDiscounted ?> <?php _e('nights', 'OBPress_Incentives') ?></h4>
                                <?php else : ?>
                                    <h4><?= DiscountCulture($incentive_per_hotel->Discount->Percent, $language) ?>% <?php _e('discount', 'OBPress_Incentives') ?></h3>
                                <?php endif; ?>
                                    <p><?= $incentive_per_hotel->CompatibleOffer[0]->OfferRPH[0] ?></p>
                                    <button><?php _e('See more', 'OBPress_Incentives') ?></button>
                            </div>
                        </div>
                        <?php
                            $incentive_slide++;
                            if($incentive_slide >= $incentive_slides) {
                                break;
                            }
                        ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="obpress-incentives-swiper-nav">
                <div class="swiper-button-prev" style="background-image:url(<?= $prevIcon ?>)">
                </div>
                <div class="swiper-pagination <?php if($settings_incentives['incentives_slide_pagination'] == 'lines'){echo 'obpress-incentives-swiper-lines';} ?><?php if($settings_incentives['incentives_slide_pagination'] == 'disabled'){echo 'obpress-swiper-pagination-disabled';} ?>"></div>
                <div class="swiper-button-next" style="background-image:url(<?= $nextIcon ?>)">
                </div>
            </div>
        </div>
    </div>
    <div class="obpress-incentives-link-holder">
        <a href="#"><?php _e('See All', 'OBPress_Incentives') ?></a>
    </div>
</div>
