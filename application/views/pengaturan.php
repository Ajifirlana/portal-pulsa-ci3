<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>

<div class="inner-body">
    <div class="container">
        <!--breadcrumb-->
        <div class="row animate-reveal">
            <div class="col-md-12">
                <div class="bread-crumb animate-reveal">
                    <h2>Pengaturan</h2>
                    <ol class="breadcrumb pull-right">
                        <li><a href="../../index.html">Home</a></li>
                        <li class="active">Pengaturan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <!-- <div class="col-md-6">
                <div class="panel panel-default animate-reveal">
                    <div class="panel-heading">Akun Bank</div>
                    <div class="panel-body">
                        <div class="form-example">
                            <form class="ng-pristine ng-valid">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Bank</label>
                                    <input type="text" class="form-control" placeholder="Nama Bank">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Rekening</label>
                                  <input type="number" class="form-control" placeholder="No Rekening">
                                 </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nama Pemilik Rekening</label>
                                     <input type="text" class="form-control" placeholder="Nama Pemilik Rekening">
                                  </div>
                                <button type="submit" class="btn btn-primary outlined">Ubah</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="col-md-6 ">
                <div class="panel panel-default animate-reveal">
                    <div class="panel-heading">Akun</div>
                    <div class="panel-body">
                        <div class="form-example">
                            <form class="form-horizontal ng-pristine ng-valid" method="POST" action="<?= base_url('profil/update')?>">
                                <div class="form-group">
                                    <label for="name3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name3" placeholder="Email" name="username" value="<?= $this->session->userdata('username')?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Ponsel</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_telpon" class="form-control" id="inputEmail3" placeholder="Nomor Ponsel" value="<?= $this->session->userdata('no_hp')?>">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Nomor Ponsel" value="<?= $this->session->userdata('email')?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success rounded">Ubah</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php $this->load->view('layout/footer')?>