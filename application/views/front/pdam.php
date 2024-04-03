<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>

<div class="inner-body">

 <div class="wrapper-index">
        <div class="wrapper-inner">
            <!--text-box-->
            <div class="row scroll-text hidden-xs">
        
                <div class="col-sm-12">
                    <div class="text-box hidden-xs">
                        <h3>
                            <span>PDAM</span> 
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
                            <?php
          echo $this->session->flashdata('msg');
          ?>                            <div class="tab-content">
                                <!--tabtravel-->
                                

                                <!--tabtour-->
                                <form method="post" action="<?php echo base_url('tagihan/cek_pdam')?>">
                                <div class="tab-pane fade in" id="tabtour">
                                    <h3><br>Cek PDAM</br></h3>
                                    
                                    <ul class="list-inline list-unstyled">
                                    <li>
                                            <div class="form-group">
                                                
                                                <select name="code" class="js-example-basic-single"  style="width:100%;">
                                                <?php foreach ($kode_pulsa as $kd) {?>
                                                    <option value="<?php echo $kd->kode; ?>"><?php echo $kd->kode; ?> ( <?php echo $kd->deskripsi; ?>)</option>
                                                    <?php }?>
                                                  
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="number" name="no_pdam" placeholder="No PDAM" class="js-example-basic-single" style="width:100%;"/>
                                                
                                            </div>
                                        </li>
                                        

                                        <li>
                                            <button type="submit" class="btn btn-search-travel">Cek Sekarang</button>
                                           
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