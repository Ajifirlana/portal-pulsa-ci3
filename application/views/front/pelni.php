<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>
<?php
          echo $this->session->flashdata('msg');
          ?>
<div class="inner-body">
   <div class="wrapper-index">
        <div class="wrapper-inner">
            <!--text-box-->
            <div class="row scroll-text hidden-xs">
        
                <div class="col-sm-12">
                    <div class="text-box hidden-xs">
                        <h3>
                            <span>Kereta</span>  <br>
                            THE WORLD YOU <br> NEVER SEEN <i class="fa fa-car"></i> <br>

                        </h3>

                    </div>
                </div>
              
            </div>
            <div class="container">
                <!--main-fill-->
                <div class="main-fill ">
                    <!--tabs-->
                    <div class="panel">
                        
                        <!--panel-body-->
                        <div class="panel-body">
                            <!--tab-content-->
                            <div class="tab-content">
                                <!--tabtravel-->
                                

                                <!--tabtour-->
                                <form method="post" action="<?php echo base_url('/')?>">
                                <div class="tab-pane fade in" id="tabtour">
                                    <h3><br>Cari Pelni</br></h3>
                                    <ul class="list-inline list-unstyled">
                            <li>
                                            <div class="form-group">
                                                <select name="origin" class="js-example-basic-single" style="width:100%;">
                                                    <option>Dari</option>
                                                    <?php 
                                            foreach ($origin as $row) {?>
                                                    <option value="<?php echo $row['CODE'];?>"><?php echo $row['NAME'];?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </li>
 <li>
                                            <div class="form-group">
                                                <select name="destination" class="js-example-basic-single" style="width:100%;">
                                                    <option>Tujuan</option>
                                                    <?php 
                                            foreach ($origin as $row) {?>
                                                    <option value="<?php echo $row['CODE'];?>"><?php echo $row['NAME'];?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="startDate"  required/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="endDate"  placeholder="Check Off" required/>
                                            </div>
                                                
                                        

                                            </li>
                                            <li>
                                            <button type="submit" class="btn btn-search-travel">Cari Sekarang</button>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                        <!--end panel body-->
                    </div>
                    <!--end tabs-->
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