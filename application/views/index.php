<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>
<?php
          echo $this->session->flashdata('msg');
          ?>
<div class="inner-body">
   <div class="wrapper-index">
        <div class="wrapper-inner">
          

    <div class="banner-v3">
        <div class="container">
            
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-box">
                                <span><i class="fa fa-taxi"></i></span>
                              
                      <a href="<?= base_url('menu/pesawat')?>"> <h4>TIKET PESAWAT</h4>
                        </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                        <span><i class="fa fa-taxi"></i></span>
                      <a href="<?= base_url('menu/kereta_api')?>"><h4>KERETA API
                               </h4></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <span><i class="fa fa-map"></i></span>
                               <h4>PULSA</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                
                        <span><i class="fa fa-taxi"></i></span>
                                <a href="<?= base_url('menu/pelni')?>"> <h4>Pelni</h4>
                               </h4>

                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
        </div>
    </div>
    
    <div class="our-work-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--name_pakg-->
                    <div class="name_pakg text-center ">SOME <span>GOOD</span> REASON</div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-images"></span>
                        </div>
                        <h4><span>+<span class="counter">120</span></span> Premium tours</h4>

                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                        <a href="#" class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                       <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                        <span class="hi-icon hi-icon-user"></span>
                    </div>
                        <h4><span>+<span class="counter">1000</span></span> Customers</h4>
                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                       <a href="#" class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 hidden-sm">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-link"></span>
                        </div>
                        <h4><span>H<span class="counter">24</span> </span> Support</h4>
                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                       <a href="#" class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
            </div>
        </div>
    </div>
</div>
<!--inner body end from here-->
<!--back_to_top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--end-->
<?php $this->load->view('layout/footer')?>