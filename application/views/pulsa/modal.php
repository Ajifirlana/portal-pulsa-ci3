
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('pulsa/tambah_kode_pulsa')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kode Pulsa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-12">
                    <label>Kategori</label>
                    
                    <select class="form-control" name="kategori" >
                    
                      <option value="rajabiller-pulsa">rajabiller-pulsa</option>
                      <option value="rajabiller-paket-data">rajabiller-paket-data</option>
                      <option value="rajabiller-ovo">rajabiller-ovo</option>
                      <option value="rajabiller-dana">rajabiller-dana</option>
                      <option value="rajabiller-pdam">rajabiller-pdam</option>
              
                      <option value="pulsa">portal-pulsa</option>
                      <option value="dana">portal-dana</option>
                      <option value="pln">portal-pln</option>
                      <option value="game">portal-game</option>
                    </select>
                  </div>
                   <div class="col-12">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                  </div>
                   <div class="col-12">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?php echo base_url('dashboard/cekharga'); ?>" target="_blank">*Lihat Panduan Kode</a>
              
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



                  <?php foreach ($data_pulsa as $row) {?>
      <div class="modal fade" id="modal-edit-<?php echo $row->id?>">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('pulsa/edit_kode')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kode Pulsa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  
                   <div class="col-12">
                    <label>Kode</label>
                    <input type="hidden" name="id" value="<?php echo $row->id?>" class="form-control">
                    <input type="text" name="kode" value="<?php echo $row->kode?>" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" value="<?php echo $row->deskripsi?>" class="form-control">
                  </div>
                   <div class="col-12">
                    <label>Harga</label>
                    <input type="number" name="harga" value="<?php echo $row->harga?>" class="form-control">
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?php echo base_url('dashboard/cekharga'); ?>" target="_blank">*Lihat Panduan Kode</a>
              
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>