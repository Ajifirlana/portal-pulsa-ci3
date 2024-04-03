
  <section class="content">

      <div class="container-fluid">
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cek harga realtime</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-footer-->
      </div></div>
  </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('dashboard/cekharga')?>">
              <div class="col-3">
                  <div class="form-group">
                    <select name="code" class="form-control">
                      <option value="PULSA">PULSA</option>
                      <option value="PLN">PLN</option>
                      <option value="GAME">GAME</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Cek</button>
                </div>
              </form>
              <br>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php 
                  $hitung = count($harga);
          
                  ?>
                  <?php for ($i=0; $i < $hitung ; $i++) {?>
                  <tr>
                    <td>
                    <?php echo $harga[$i]["code"];?>
                  </td>
                  
                  <td>
                    <?php echo $harga[$i]["price"];?>
                  </td>
                  <td>
                    <?php echo $harga[$i]["description"];?>
                  </td>
                  <td>
                    <?php echo $harga[$i]["status"];?>
                  </td>
                  
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- DataTables  & Plugins -->
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
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>