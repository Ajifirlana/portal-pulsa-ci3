
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('user/tambah_user')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                 
                   <div class="col-12">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



                  <?php foreach ($user as $row) {?>
      <div class="modal fade" id="modal-edit-<?php echo $row->id?>">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('user/edit')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  
                   <div class="col-12">
                    <label>username</label>
                    <input type="hidden" name="id" value="<?php echo $row->id?>" class="form-control">
                    <input type="text" name="username" value="<?php echo $row->username?>" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>password</label>
                    <input type="text" name="password" value="<?php echo $row->password?>" class="form-control">
                  </div>
                 
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>

          <?php foreach ($user as $row) {?>
      <div class="modal fade" id="modal-hapus-<?php echo $row->id?>">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('user/hapus')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  
                   <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $row->id?>" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Yakin menghapus user dengan nama <?php echo $row->username?> ? </label>
                  </div>
                 
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>