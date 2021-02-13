<?php $user = get_user(); ?>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-lg-8">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Aktif Özel Dersler</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Lütfen oluşturduğunuz özel derse katılınız!</p>

                <div>
                    <div class="pv-30 ph-20 feature-box light-gray-bg bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <h3>Matematik</h3>
                        <div class="separator clearfix"></div>
                        <a href="<?php echo base_url("home/join_instructor");?>">Derse Katıl<i class="pl-1 fa fa-angle-double-right"></i></a>
                    </div>
                </div>

            </div>

            <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                <div class="sidebar">
                    <div class="block clearfix">
                        <h3 class="title">Menüler</h3>
                        <div class="separator-2"></div>
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("profilim"); ?>">Profilim</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Ayarlar</a></li>
                                <?php if ($user->type == "Eğitmen") { ?>
                                    <li class="nav-item"><a class="nav-link" href="#">Özel Ders Ver</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#">Aktif Dersler</a></li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
