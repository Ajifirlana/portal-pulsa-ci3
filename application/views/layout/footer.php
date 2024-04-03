
<!--footer start here-->
<footer class="main-footer">
    <!--end button here-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="inner-footer">
                    <a href="<?= base_url('/');?>"><img src="<?= base_url('assets/front/img/logo.png')?>"alt="logo" class="img-responsive"></a>
                    <p class="footer-content">
                       <?= $web->deskripsi ?>
                    </p>
                    <br>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-phone"></i></a></span> Call Us <?= $web->no_hp ?></p>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-envelope"></i></a></span>  Email <?= $web->email ?></p>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-map-marker"></i></a></span> <?= $web->alamat ?></p>
                    <ul class="list-unstyled list-inline ">
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-facebook-f"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-futbol-o"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-google-plus-official"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-linkedin"></i></span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 hidden-sm hidden-xs col-xs-12">
                <div class="list-of-nav">
                    <div class="inner-footer1">
                        <h4>PERUSAHAAN</h4>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('/');?>"><i class="fa fa-hand-o-right"></i> Blog</a></li>
                            <li><a href="<?= base_url('/');?>"><i class="fa fa-hand-o-right"></i> Karir</a></li>
                           <!--  <li><a href="html/pages/contact_us.html"><i class="fa fa-hand-o-right"></i> Contact Us</a></li>
                            <li><a href="html/pages/log_in.html"><i class="fa fa-hand-o-right"></i> Log In</a></li>
                            <li><a href="html/pages/sign_up.html"><i class="fa fa-hand-o-right"></i> Sign Up</a></li>
                            <li><a href="html/pages/coming_soon.html"><i class="fa fa-hand-o-right"></i> Coming Soon</a></li>
                            <li><a href="html/pages/FAQ.html"><i class="fa fa-hand-o-right"></i> FAQ</a></li> -->
                        </ul> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="inner-footer1">
                    <h4>PRODUK</h4>
                    <div class="btn-group">
                        <a href="<?= base_url('menu/pesawat')?>" class="btn-tag">Pesawat</a>
                        <a href="<?= base_url('menu/kereta_api')?>" class="btn-tag">Kereta Api</a>
                        <a href="<?= base_url('menu/pelni')?>" class="btn-tag">Pelni</a>
                        <a href="#" class="btn-tag">Pulsa</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs col-xs-12">
                <div class="inner-footer2">
                    <h4>AMAZING PLACES</h4>
                    <ul class="list-inline list-unstyled">
                        <li>
                            <div class="img-news">
                                <img src="<?= base_url('assets/front/img/iso-3.jpg')?>" alt="image" class="img-responsive">
                            </div>
                            <div class="content-news">
                                <p><a href="#">We reading  togather the organaization is good</a></p>
                                <small>Feb 22-2016</small>
                            </div>
                        </li>
                        <li>
                            <div class="img-news">
                                <img src="<?= base_url('assets/front/img/iso-3.jpg')?>" alt="image" class="img-responsive">
                            </div>
                            <div class="content-news">
                                <p><a href="#">We reading  togather the organaization is good</a></p>
                                <small>Feb 22-2016</small>
                            </div>
                        </li>
                        <li class="no-border">
                            <div class="img-news">
                                <img src="<?= base_url('assets/front/img/iso-3.jpg')?>" alt="image" class="img-responsive">
                            </div>
                            <div class="content-news">
                                <p><a href="#">We reading  togather the organaization is good</a></p>
                                <small>Feb 22-2016</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <p class="footer-bottom">&copy; copyright 2023 by <a href="http://teamworktec.com/">@queue team</a></p>
    <!--button back to top-->

</footer>
<!--footer end here-->

<!--page loader-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_big">
                <img src="<?= base_url('assets/front/img/img-loader.png')?>" alt="loader">
            </div>
        </div>
    </div>
</div>

<!--datatable-->
<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!--datatable-->
<!--script files-->
<script src="<?= base_url('assets/front/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/jqwidgets/scripts/date-picker.js')?>"></script>
<script src="<?= base_url('assets/front/js/isotop/isotope-docs.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/select2/select2.js')?>"></script>
<script src="<?= base_url('assets/front/js/slick.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/parallax/parallax.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/scrollreveal.min.js')?>"></script>
<script src="<?= base_url('assets/front/js/custom.js')?>"></script>
<!--end script files-->

<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
</body>
</html>