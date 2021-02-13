<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- banner start -->
                <!-- ================ -->
                <div class="pv-40 banner light-gray-bg">
                    <div class="container clearfix">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $currentItem->video_url; ?>"></iframe>
                        </div>

                    </div>
                </div>
                <!-- banner end -->

                <!-- main-container start -->
                <!-- ================ -->
                <section class="main-container padding-ver-clear">
                    <div class="container pv-40">
                        <div class="row">

                            <!-- main start -->
                            <!-- ================ -->
                            <div class="main col-lg-12">
                                <h1 class="title"><?php echo $currentItem->title; ?></h1>
                                <div class="separator-2"></div>
                                <p><?php echo $currentItem->content; ?></p>
                            </div>
                            <!-- main end -->
                        </div>
                    </div>
                </section>
                <!-- main-container end -->

                <!-- section start -->
                <!-- ================ -->
                <section class="section pv-40 clearfix">
                    <div class="container">
                        <h3 class="mt-3">Diğer <strong>Konular</strong></h3>
                        <div class="row grid-space-10">
                            <?php foreach ($items as $item) { ?>
                                <div class="col-md-6 col-lg-3 isotope-item <?php echo $item->lesson_id; ?>">
                                    <div class="image-box style-2 mb-20 shadow-2 bordered text-center">
                                        <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <?php
                                            $image = get_subject_cover_image($item->id);
                                            $image = ($image) ? base_url("panel/uploads/subject_v/$image") : base_url("assets/images/portfolio-1.jpg")
                                            ?>
                                            <div>
                                                <img src="<?php echo $image; ?>"
                                                     alt="">
                                                <div class="overlay-to-top">
                                                    <p class="small margin-clear"><em>Yükseköğretim Kurumları Sınavı <br></em></p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="body light-gray-bg text-left">
                                            <h3><?php echo $item->title; ?></h3>
                                            <div class="separator"></div>
                                            <p><?php echo character_limiter(strip_tags($item->description), 60);  ?></p>
                                            <a href="<?php echo base_url("yks-konu-detay");?>"
                                               class="btn btn-default btn-hvr hvr-shutter-out-horizontal margin-clear">Görüntüle<i
                                                        class="fa fa-arrow-right pl-10"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <!-- section end -->
            </div>
        </div>
    </div>
</div>