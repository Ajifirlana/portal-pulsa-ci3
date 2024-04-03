 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
          <form method="POST" action="<?php echo base_url('setting/update') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <label>Nama Website</label>
                    <input type="text" class="form-control" name="nama_website" value="<?= $row->nama_website?>">
                  </div>
                   <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"><?= $row->deskripsi?></textarea>
                  </div>
                </div>

                <div class="col-md-6">

                   <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $row->no_hp?>">
                  </div>                  
                   <div class="form-group">
                    <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?= $row->email?>">
                  </div>
                   <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?= $row->alamat?></textarea>
                  </div>
                </div>
              </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit</button>
                </div>
              <!-- /.card-body -->
             
            </div>
</form> 
            </div>
          </div> <?php
          echo $this->session->flashdata('msg');
          ?>
        </div>
      </section>
  


