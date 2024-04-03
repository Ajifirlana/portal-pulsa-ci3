<?php if (empty($hasil_pencarian['data'][0]["classes"][0])) {?>
    
    <?php }else{?>
<?php 
$i= 0;
foreach ($hasil_pencarian['data'][0]["classes"][$i] as $row) {?>

                            
                          <div class="modal fade" id="exampleModal-<?= $row["class"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <form method="POST" action="<?= base_url('orderan_saya/order_tiket_pesawat')?>" target="_blank" >

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Pemesan Class <?= $row["class"]  ?></h5>
    
      </div>
      <div class="modal-body">
        <div class="row">
       <div class="col-md-6">
       <div class="form-group">
            <label>Nama Depan</label>
            <input type="text" name="nama_depan" placeholder="Nama Depan" value="<?= $this->session->userdata('username')?>" class="form-control">
       </div>
       <div class="form-group">
            <label>Nama Belakang</label>
            <input type="text" name="nama_belakang" placeholder="Nama Belakang" value="<?= $this->session->userdata('username')?>" class="form-control">
       </div>
        <div class="form-group">
            <label>Titel</label>
            <select name="titel" class="form-control">
                <option value="MR">Tuan</option>                
                <option value="Nyonya">Nyonya</option>             
                   <option value="Nona">Nona</option>
            </select>
       </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="number" value="<?= $this->session->userdata('no_hp')?>" name="no_telpon" placeholder="ex:089531941653" class="form-control">
       </div>

   
       <div class="form-group">
            <label>Departure Date</label>
            <input type="date" name="departureDate" class="form-control" required>
       
       </div>
</div>
       <div class="col-md-6">
      <?php
       if(empty($this->session->userdata('username'))){?>
        <div class="form-group">
            <label>Log in atau buat akun sekarang <a href="<?php echo base_url('register')?>">Register</a></label>
             </div>
             <?php }?>
        <div class="form-group">
            <label>Dari</label>
            <?=$row["departureName"]?>
            
            <label>Tujuan</label>
            <?=$row["arrivalName"]?>
        </div>
        
        <div class="form-group">
        
        <input type="hidden" value="<?=$hasil_pencarian['data'][0]["airlineCode"]?>" name="airlineCode" class="form-control">
        <?php 
        $i=0;
        if (empty($hasil_pencarian['data'][0]["isTransit"])) {?>
        <input type="hidden" value="<?= $row["seat"]?>" name="seat" class="form-control">
          <?php }else{?>
        <?php foreach($hasil_pencarian['data'][$i]["classes"][1] as $st){?>
          <input type="hidden" value="<?= $st["seat"]?>" name="seat" class="form-control">
        <?php }?>
        <?php }?>
        <input type="hidden" value="<?=$row["departure"]?>" name="departure" class="form-control">
        <input type="hidden" value="<?=$row["arrival"]?>" name="arrival" class="form-control">
        </div>
        
        
        <div class="form-group">
            <label>Maskapai</label>
            <?=$hasil_pencarian['data'][0]["airlineName"]?>
            
            <input type="hidden" value="<?=$hasil_pencarian['data'][0]["airlineName"]?>" name="nama_pesawat" class="form-control">
        </div>
        <div class="form-group">
            <label>Class</label>
            <?=$row["class"]?>
            <input type="hidden" value="<?=$row["class"]?>" name="class" class="form-control">
        </div>

        <div class="form-group">
            <label>Dewasa 1x</label>

                                        <?= 'Rp. '.number_format($row['price']);?>
                              
                  
       </div>
           
       <div class="form-group">
            <label>Total Pembayaran</label>
            <?= 'Rp. '.number_format($row['price']); ?>
            <input type="hidden" name="total_bayar" value="<?= $row['price']?>">
       </div>
       </div>
      </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Lanjutkan Booking</button>
      </div>
    </div></form>
  </div>
</div>
<?php }?>
<?php }?>


<?php if (empty($hasil_pencarian['data'][0]["classes"][0])) {?>
    
    <?php }else{?>
<?php 
$no=0;
foreach ($hasil_pencarian['data'][0]["classes"][$no++] as $row) {?>

                          <div class="modal fade" id="detailModal-<?= $row["price"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Penerbangan </h5>
        
      </div>
      <div class="modal-body">
          <?=$hasil_pencarian['data'][0]["title"]?><p>Transit <?=$hasil_pencarian['data'][0]["isTransit"]?></p>
            <p>Kota Transit (<?=$hasil_pencarian['data'][0]["cityTransit"]?>)</p>
              <div class="row">
                            
                            <?php $i = 1;
                            foreach($hasil_pencarian['data'][0]["detailTitle"] as $trans){?> 
                            <?php $hitung = count($hasil_pencarian['data'][0]["detailTitle"]);?>
                            <?php if($hitung <2){?>
                                <div class="col-md-3">
                                    Langsung
                            </div> 
                            <?php }else{?>
                             <div class="col-md-6">
                             <div align="center">
                             <img  alt="logo" src="<?= $trans["flightIcon"]?>" width="50px" height="50px" > 
                             </div>
                            <h5><b>Tanggal Berangkat :</b><?=$trans["departureDate"]?>-<?=$trans["depart"]?> </h5>
                            <h5><b>Berangkat :</b> <?=$trans["originName"]?> </h5>
                            <h5><b>Nama Maskapai :</b><?=$trans["flightName"]?> </h5>
                            <h5><b>Kode Penerbangan :</b><?=$trans["flightCode"]?> </h5>
                            <h5><?=$trans["transitTime"]?> </h5>
                            <h5><?=$trans["origin"]?> </h5>
                            <h5><b>Tiba :</b><?=$trans["destinationName"]?> (<?=$trans["destination"]?>)</h5>
                            <h5><b>Jam Tiba :</b><?=$trans["arrival"]?> </h5>
                            <h5><b>Durasi :</b><?=$trans["durationDetail"]?> </h5>
                            </div>
                          
                        <?php }?>
                        <?php }?>
      </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php }?>

