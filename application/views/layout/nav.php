<!--start top-bar-->
<div class="top_bar_travel hidden-xs text-center">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6">
            <!-- <ul class="list-unstyled list-inline top_contact">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('assets/front/img/r-flag.png')?>" alt="flag">English
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="<?= base_url('assets/front/img/frence-flag.ico')?>" alt="flag">Fransh</a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/turkey-flag.ico')?>" alt="flag">Spanish </a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/russia-flag.ico')?>" alt="flag">Russian</a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/garmen-flg.png')?>" alt="flag">German</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-usd"></i> USD
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-usd"></i> ERU</a></li>
                        <li><a href="#"><i class="fa fa-gbp"></i> PR</a></li>
                        <li><a href="#"><i class="fa fa-eur"></i> ERU</a></li>
                        <li><a href="#"><i class="fa fa-inr"></i> RS</a></li>
                    </ul>
                </li>
            </ul> -->
        </div>
        <div class="col-md-5 hidden-sm">
            <div class="top_search">
                <form>
                    <input type="text" placeholder="Search here...">
                    <button class="email-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="top_email">
                <ul class="list-unstyled list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

            </div>
        </div>

        </div>
    </div>
</div>
<!--end top-bar-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('/')?>"><img src="<?= base_url('assets/front/img/logo-v2.png')?>" alt="logo" height="40px" width="130px"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-home"></i>Home
                        <span class="caret"></span></a>
                  
                </li>
                <!--Flights-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-hotel"></i>Tempat Menginap
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">  Hotel</a></li>
                      
                    </ul>
                </li>
                <!--Hotels-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-hotel"></i>Tagihan & Isi Ulang
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('menu/pulsa') ?>">  Pulsa</a></li>
                        <li><a href="<?php echo base_url('menu/pdam') ?>">  PDAM</a></li>
                      
                    </ul>
                </li>
                <!--Travels-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-car"></i>Transportasi
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('menu/pesawat')?>">  Pesawat</a></li>
                       <li><a href="<?= base_url('menu/kereta_api')?>">  Kereta Api</a></li>
                       <li><a href="<?= base_url('menu/pelni')?>">  Pelni</a></li>
                    </ul>
                </li>
                <!--ShortCodes-->
               <!--  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-th-list"></i>ShortCodes
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="html/shortcodes/typography.html">  Typography</a></li>
                        <li><a href="html/shortcodes/forms.html">  Form</a></li>
                        <li><a href="html/shortcodes/icons.html">  Icons</a></li>
                        <li><a href="html/shortcodes/buttons.html">  Buttons</a></li>
                        <li><a href="html/shortcodes/animation.html">  Animation</a></li>
                        <li><a href="html/shortcodes/toggles.html">  Toggles</a></li>
                        <li><a href="html/shortcodes/alerts.html">  Alerts</a></li>
                        <li><a href="html/shortcodes/tabs.html">  Tabs</a></li>
                        <li><a href="html/shortcodes/tables.html" class="no-border">  tables</a></li>
                    </ul>
                </li> -->
                <!--Pages-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-briefcase"></i>Akun
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!-- <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Headers
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/headers/header_one.html"><i class="fa fa-certificate"></i>Header One</a></li>
                                <li><a href="html/pages/headers/header_two.html"><i class="fa fa-certificate"></i>Header Two</a></li>
                                <li><a href="html/pages/headers/header_three.html"><i class="fa fa-certificate"></i>Header Three</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Footers
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/footers/footer_one.html"><i class="fa fa-certificate "></i>Footers One</a></li>
                                <li><a href="html/pages/footers/footer_two.html"><i class="fa fa-certificate "></i>Footers Two</a></li>
                                <li><a href="html/pages/footers/footer_three.html"><i class="fa fa-certificate "></i>Footers Three</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Search Styles
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/search-styles/search_one.html"><i class="fa fa-certificate "></i>Search One</a></li>
                                <li><a href="html/pages/search-styles/search_two.html"><i class="fa fa-certificate "></i>Search Two</a></li>
                                <li><a href="html/pages/search-styles/search_three.html"><i class="fa fa-certificate "></i>Search Three</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;"> Contact Us
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/contact_us.html"><i class="fa fa-certificate "></i>Contact One</a></li>
                                <li><a href="html/pages/contact_us_two.html"><i class="fa fa-certificate "></i>Contact Two</a></li>
                            </ul>
                        </li> -->
                        <?php 
                        if(!empty($this->session->userdata('username'))){?>     

                         <li><a href="<?php echo base_url('orderan_saya/kereta_api') ?>">  Orderan Tiket KAI</a></li>
                         
                         <li><a href="<?php echo base_url('orderan_saya/pesawat') ?>">  Orderan Tiket Pesawat</a></li>
                         <li><a href="<?php echo base_url('profil/pengaturan') ?>">  Pengaturan</a></li>
                         <li><a href="<?php echo base_url('login/logout') ?>">  Log Out</a></li>
                           <?php }else{?>
                        <li><a href="<?php echo base_url('pelanggan') ?>">  Log In</a></li>
                        <li><a href="<?php echo base_url('register') ?>">  Register</a></li>
                         <?php }?>
                      <!--   <li><a href="html/pages/coming_soon.html">  Coming Soon</a></li>
                        <li><a href="html/pages/FAQ.html">  FAQ</a></li>
                        <li><a href="html/pages/404.html" class="no-border">  404</a></li> -->
                    </ul>
                </li>
                <!--Find My Flight-->
                <!-- <li class="visible-lg"><span><a href="html/flight/flights_list_two/left_sidebar.html" class="btn btn_order_now">Find My Flight</a></span></li> -->
            </ul>
        </div>
    </div>
</nav>