<?php $settings = get_settings(); ?>

<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets"); ?>/images/contact_banner.jpeg'); background-position: 50% 30%;">
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="index.html">Ana Sayfa</a></li>
                <li class="breadcrumb-item active">Giriş yap</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center pv-20">
                <h2 class="title">Bize Ulaşın</h2>
                <div class="separator mt-10"></div>
                <p class="text-center">Bize ulaşmak için aşağıdaki kanallardan herhangi birini kullanabilirsiniz.</p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-lg-8 space-bottom">
                <p>Sisteme giriş yapmak için lütfen bilgilerinizi giriniz...</p>
                <div class="alert alert-success hidden-xs-up" id="MessageSent">
                    We have received your message, we will contact you very soon.
                </div>
                <div class="alert alert-danger hidden-xs-up" id="MessageNotSent">
                    Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
                </div>
                <div class="contact-form">
                    <form id="" class="margin-clear" action="<?php echo base_url("home/do_register");?>" method="post">
                        <div class="form-group has-feedback">
                            <label for="email">Eposta*</label>
                            <input type="email" class="form-control" name="user_email" placeholder="">
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Kullanıcı Adı*</label>
                            <input type="text" class="form-control" name="user_username" placeholder="">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="text">Kullanıcı türü*</label>
                            <select class="form-control" name="user_type">
                                <option>- - - - -</option>
                                <option>Öğrenci</option>
                                <option>Eğitmen</option>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="subject">Şifre*</label>
                            <input type="password" class="form-control" name="user_password" placeholder="">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                        <input type="submit" value="Kayıt ol" class="submit-button btn btn-default">
                        <a href="<?php echo base_url("giris-yap"); ?>" class="pull-right btn btn-danger btn-md btn-outline">Giriş yap</a>
                    </form>
                </div>
            </div>
            <!-- main end -->

            <!-- sidebar start -->
            <!-- ================ -->
            <aside class="col-lg-3 ml-xl-auto">
                <div class="sidebar">
                    <div class="side vertical-divider-left">
                        <h3 class="title logo-font">The <span class="text-default">Project</span></h3>
                        <div class="separator-2 mt-20"></div>
                        <ul class="list">
                            <li><i class="fa fa-home pr-10"></i><?php echo strip_tags($settings->address); ?></span></li>
                            <li><i class="fa fa-phone pr-10"></i><?php echo $settings->phone_1; ?></li>
                            <li><i class="fa fa-mobile pr-10 pl-1"></i><?php echo $settings->phone_2; ?></li>
                            <li><i class="fa fa-envelope pr-10"></i><a href="mailto:info@idea.com"><?php echo $settings->email;?></a></li>
                        </ul>
                        <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                            <?php if($settings->facebook) { ?>
                                <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>

                            <?php if($settings->twitter) { ?>
                                <li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php } ?>
                            <?php if($settings->instagram) { ?>
                                <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                            <?php } ?>
                            <?php if($settings->linkedin) { ?>
                                <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                            <?php } ?>
                        </ul>
                        <div class="separator-2 mt-20 "></div>
                    </div>
                </div>
            </aside>
            <!-- sidebar end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<section class="section pv-40 background-img-3 dark-translucent-bg" style="background-position:50% 77%;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call-to-action text-center">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-8">
                            <h2 class="title">Join Us Now</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                            <div class="separator"></div>
                            <form class="form-inline margin-clear d-flex justify-content-center">
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="subscribe2">Email address</label>
                                    <input type="email" class="form-control form-control-lg" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear ml-3">Submit <i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
