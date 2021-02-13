<?php $user = get_user(); ?>
<section class="main-container">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item) { ?>
                <div class="col-md-4 ">
                    <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg circle"><i class="fa fa-users"></i></span>
                        <h3 style="font-family: Quicksand;"><?php echo $item->lesson_name; ?></h3>
                        <div class="separator clearfix"></div>
                        <p style="font-family: Ubuntu"><?php echo $item->subject; ?></p>
                        <p style="font-family: Ubuntu"><?php echo $item->instructor_name; ?></p>
                        <p style="font-family: Ubuntu"><?php echo ($item->isOnline == 1) ? "Şuan aktif" : ""; ?></p>

                        <?php if ($coupons) { ?>
                        <button style="font-family: Ubuntu"
                           data-url="<?php echo base_url("home/join/$coupons->id"); ?>"
                           class="conference-btn"
                           href="">Dersi al<i class="pl-1 fa fa-angle-double-right"></i></button>
                        <?php } else { ?>
                            <button style="font-family: Ubuntu"
                                    data-url="<?php echo base_url(); ?>"
                                    class="conference2-btn"
                                    href="">Dersi al<i class="pl-1 fa fa-angle-double-right"></i></button>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
