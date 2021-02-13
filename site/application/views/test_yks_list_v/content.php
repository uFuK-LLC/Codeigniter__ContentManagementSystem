<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">YKS Testleri</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Güncel içerikler ile hedeflerine bir adım daha yakınsın <br> başarmak için daha sıkı çalış!</p>

                <!-- isotope filters start -->
                <div class="filters">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">Tümü</a></li>
                        <?php foreach ($lessons as $lesson) { ?>
                            <li class="nav-item"><a class="nav-link" href="#"
                                                    data-filter=".<?php echo $lesson->id; ?>"><?php echo $lesson->name; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- isotope filters end -->

                <div class="isotope-container-fitrows row grid-space-10">

                    <?php foreach ($items as $item) { ?>
                        <div class="col-md-6 col-lg-3 isotope-item <?php echo $item->lesson_id; ?>">
                            <div class="image-box style-2 mb-20 shadow-2 bordered text-center">
                                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <?php
                                    $image = get_subject_cover_image($item->id);
                                    $image = ($image) ? base_url("panel/uploads/test_v/$image") : base_url("assets/images/portfolio-1.jpg")
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
                                    <a href="<?php echo base_url("test/test_yks_detail/$item->id");?>"
                                       class="btn btn-default btn-hvr hvr-shutter-out-horizontal margin-clear">Başla<i
                                                class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
