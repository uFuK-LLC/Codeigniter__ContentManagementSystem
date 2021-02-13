<?php $user = get_user(); ?>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-lg-8">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Özel Ders</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Özel ders oluşturmak için lütfen formu doldurunuz!</p>

                <div class="contact-form">
                    <form id="" class="margin-clear" action="<?php echo base_url("home/add_lesson"); ?>" method="post">
                        <input type="hidden" class="form-control" name="instructor_id" value="<?php echo $user->id; ?>">
                        <div class="form-group has-feedback">
                            <label for="text">Ders Adı*</label>
                            <input type="text" class="form-control" name="lesson_name" placeholder="">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="text">Eğitmen Adı*</label>
                            <input type="text" class="form-control" name="lesson_instructor" placeholder="">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="text">Konu*</label>
                            <input type="text" class="form-control" name="lesson_subject" placeholder="">
                        </div>
                        <input type="submit" value="Oluştur" class="submit-button btn btn-default">
                    </form>
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
                                    <li class="nav-item"><a class="nav-link" href="#">Aktif Dersler</a></li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
