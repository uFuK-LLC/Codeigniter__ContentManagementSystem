<?php $user = get_user(); ?>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-lg-8">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Profilim</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Bilgilerinizi aşağıdaki form ile güncelleyebilirsiniz!</p>

                <div class="contact-form">
                    <form id="" class="margin-clear" action="<?php echo base_url("home/do_register"); ?>" method="post">
                        <div class="form-group has-feedback">
                            <label for="email">Eposta*</label>
                            <input type="email" class="form-control" name="user_email" placeholder=""
                                   value="<?php echo $user->email; ?>">
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Kullanıcı Adı*</label>
                            <input type="text" class="form-control" name="user_username" placeholder=""
                                   value="<?php echo $user->username; ?>">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="subject">Şifre*</label>
                            <input type="password" class="form-control" name="user_password" placeholder=""
                                   value="<?php echo $user->password; ?>">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                        <input type="submit" value="Güncelle" class="submit-button btn btn-default">
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
                                <li class="nav-item"><a class="nav-link active" href="#">Profilim</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Ayarlar</a></li>
                                <?php if ($user->type == "Eğitmen") { ?>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("home/create_lesson"); ?>">Özel Ders Ver</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("home/created_lesson"); ?>">Aktif Dersler</a></li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
