<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive"
                                                      src="<?php echo base_url(); ?>assets/images/206.jpg"
                                                      alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">Ufuk Argun</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <small>LLC</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="/index.html">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Ana Sayfa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="profile.html">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Profil</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="settings.html">
                                        <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                        <span>Ayarlar</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="logout.html">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("settings"); ?>">
                        <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                        <span class="menu-text">Site Ayarları</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
                        <span class="menu-text">Galeriler</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#"><span class="menu-text">Resim Galerisi</span></a></li>
                        <li><a href="#"><span class="menu-text">Video Galerisi</span></a></li>
                        <li><a href="#"><span class="menu-text">Dosya Galerisi</span></a></li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url("slides"); ?>">
                        <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
                        <span class="menu-text">Slider</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon fa fa-book"></i>
                        <span class="menu-text">Kitaplık</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url("subject"); ?>"><span class="menu-text">Konular</span></a></li>
                        <li><a href="<?php echo base_url("test"); ?>"><span class="menu-text">Testler</span></a></li>
                        <li><a href="#"><span class="menu-text">Sınavlar</span></a></li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url("members"); ?>">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">Aboneler</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("popups"); ?>">
                        <i class="menu-icon zmdi zmdi-lamp zmdi-hc-lg"></i>
                        <span class="menu-text">Popup Hizmeti</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("ranking"); ?>">
                        <i class="menu-icon fa fa-sort-amount-asc"></i>
                        <span class="menu-text">Sıralama</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
                        <span class="menu-text">Ana Sayfa</span>
                    </a>
                </li>

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>