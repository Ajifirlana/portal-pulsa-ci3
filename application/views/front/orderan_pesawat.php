<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>
 

<div class="inner-body">
    <div class="container">
        <!--breadcrumb-->
        <div class="row animate-reveal">
            <div class="col-md-12">
                <div class="bread-crumb animate-reveal">
                    <h2><?= $menu_title ?></h2>
                    <ol class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li class="active"><?= $menu_title ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
        <div class="col-md-3">
                <div class="panel panel-default animate-reveal">
                    <div class="panel-heading">Cara Bayar</div>
                    <div class="panel-body">
                        <div class="form-example">
                            <form class="ng-pristine ng-valid">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">- Lakukan Pembayaran sesuai nominal total bayar</label>
                                    <label>- Transefer Ke Rekening Berikut</label>
                                    <div align="center" style="bacground-color:blue;">
                                    
                                    <?php foreach ($rekening as $row) {?>
                                        <h5><b><?= $row->nama_bank?></b></h5>
                                        <h5><b><?= $row->no_rek?></b></h5>
                                        <h5><b>A.N Abdul Rahman</b></h5>
                                        <hr>
                                        <?php }?>
                                        </div>
                                    <label>- Upload Bukti Pembayaran</label>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </div>    
        
        <div class="col-md-9">
                <div class="panel panel-default animate-reveal">
                    <div class="panel-heading">Orderan Saya</div>
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-md-3">
                        
                    <div class="form-group">
                    <form method="post" action="">
                        <label>Cek Booking</label>
                        <input type="text" class="form-control" id="cek_booking" name="cek_booking" placeholder="Kode Booking">
                    </form>
                        <?php if(isset($_POST['cek_booking'])){
                           $curl = curl_init();

                           curl_setopt_array($curl, array(
                             CURLOPT_URL => 'https://rajabiller.fastpay.co.id/travel/flight/booking_info',
                             CURLOPT_RETURNTRANSFER => true,
                             CURLOPT_ENCODING => '',
                             CURLOPT_MAXREDIRS => 10,
                             CURLOPT_TIMEOUT => 0,
                             CURLOPT_FOLLOWLOCATION => true,
                             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                             CURLOPT_CUSTOMREQUEST => 'POST',
                             CURLOPT_POSTFIELDS =>'{
                               "airline" : "TPGA",
                               "departure" : "BTH",
                               "arrival" : "CGK",
                               "transactionId" : 136474100,
                               "token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjhkNzNtbmc4OWVkIn0.eyJpc3MiOiJodHRwczpcL1wvdHJhdmVsLnJhamFiaWxsZXIuY29tIiwiYXVkIjoiUmFqYWJpbGxlciBUcmF2ZWwgQXBpIiwianRpIjoiOGQ3M21uZzg5ZWQiLCJpYXQiOjE2OTA0NzI4NDksIm5iZiI6MTY5MDQ3MjkwOSwiZXhwIjoxNjkwNDc2NDQ5LCJvdXRsZXRJZCI6IlNQMzEwOTIzIiwicGluIjoiMjI4MDc4Iiwia2V5IjoiRkFTVFBBWSJ9.WxeZKV4EGeNyJ-Qv7Hn5PFbiDqvv-twb2PRxxZxDfds"
                           }',
                           ));
                           
                           $response = curl_exec($curl);
                           
                           curl_close($curl);
                   
                           $data = json_decode($response,true) ;
                         $data=$data['data'];
                        echo   'Booking Code :'.$data['bookingCode'];
                        echo"<p>";
                         echo 'Departure Date:'.$data['departureDate'];
                         echo"<p>";
                          echo 'Time Limit :'.$data['timeLimit'];
                          echo"<p>";
                          echo 'Pax Paid :'.number_format( $data['paxPaid']);
                        } ?>
                        </div>
                        </div>
                               </div>
        <table id="example"  class="table table-bordered table-striped">
        <thead>
            <tr>
               
              <th>Status</th>  
              <th>Upload File</th>  
               <th>Nama Pemesanan</th>
              <th>Kode Booking</th> 
              <th>Transaction ID</th>  
              <th>Time Limit</th>  
              <th>Reservation Date</th>  
              <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderan_saya as $row) {?>
            <tr>
            <td>
            <?php echo $row->status;?>        
                </td>
                
            <td><form class="form-horizontal" action="<?= base_url('orderan_saya/bayar_pesawat')?>" method="post" enctype="multipart/form-data">
                <input type= "hidden" name="id" value="<?= $row->id?>"/>
                <input type="file" class="form-control" name="image" required="">
                <br>
                <button type="submit">Upload</button>    
            </form>
                </td>
                <td><?= $row->nama_lengkap?></td>
                <td><?= $row->kode_booking?></td>
                <td><?= $row->transaction_id?></td>
                <td><?= $row->timelimit?></td>
                <td><?= $row->reservationdate?></td>
                <td><?= 'Rp. '.number_format($row->total_bayar)?></td>
                
            </tr>
        <?php }?>
            </tbody>
    </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php $this->load->view('layout/footer')?>