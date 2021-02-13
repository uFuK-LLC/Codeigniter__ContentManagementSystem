<section class="clearfix pv-40">
    <div class="container">
        <div class="row justify-content-lg-center">

            <h3 class="mt-4">Yeni <strong>Eklenenler</strong></h3>
            <div class="separator-2"></div>
            <div class="row grid-space-10">
                <?php foreach ($items as $item) { ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="image-box style-2 mb-20 bordered text-center">
                            <div>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="overlay-container">
                                            <?php
                                            $image = get_subject_cover_image($item->id);
                                            $image = ($image) ? base_url("panel/uploads/subject_v/$image") : base_url("assets/images/portfolio-1.jpg")
                                            ?>
                                            <img src="<?php echo $image; ?>" alt="">
                                            <div class="overlay-to-top">
                                                <p class="small margin-clear"><em>Yeni Eklenenler</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body shadow light-gray-bg text-left">
                                <h3><?php echo $item->title; ?></h3>
                                <div class="separator"></div>
                                <p><?php echo character_limiter(strip_tags($item->description), 60);  ?></p>
                                <a href="<?php echo base_url("yks-konu-listesi"); ?>"
                                   class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Görüntüle <i class="fa fa-arrow-right pl-10"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>