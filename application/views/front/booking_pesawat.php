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
                    <div class="panel-heading">Info</div>
                    <div class="panel-body">
                        <label>Printscreen atau Screenshot Kode Booking</label>
                    </div>
                </div>
        </div>  

        <div class="col-md-8">
                <div class="panel panel-default animate-reveal">
                    <div class="panel-heading">Booking Saya</div>
                    <div class="panel-body">
                    <div class="col-md-6">
                    <?= $airlineCode ?>
                    </div>
                    <div class="col-md-6">
                    <?= $departure ?>
                    </div>
                    <div class="col-md-6">
                    <?= $arrival ?>
                    </div>
                    
                    <form method="POST" action="<?php echo base_url('orderan_saya/simpan_booking')?>">
                    <?php if(empty($response["data"])){?>
                        <div class="white-box write_review animate-reveal">
                           Gagal Mendapatkan Kode Booking Periksa formulir nama depan dan nama belakang anda
                    </div> 
                           <?php }else{?>    
                                <div class="white-box write_review animate-reveal">
                           <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Passengers<span>*</span></label>
                                <input type="text" class="form-control" name="passengers" required value="<?php echo $response["data"]["passengers"];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Details<span>*</span> </label>
                                <input type="text" class="form-control"name="details"   required value="<?php echo $response["data"]["details"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Airline Code<span>*</span></label>
                                <input type="text" class="form-control" name="airlineCode"   required  value="<?= $airlineCode ?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Booking Code<span>*</span></label>
                                <input type="text" class="form-control" name="bookingCode"   required  value="<?php echo $response["data"]["bookingCode"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Payment Code<span>*</span></label>
                                <input type="text" class="form-control"  value="<?php echo $response["data"]["paymentCode"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Flight Code1<span>*</span></label>
                                <input type="text" class="form-control" name="flightCode1" required  value="<?php echo $response["data"]["flightCode1"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Nominal<span>*</span></label>
                                <input type="text" class="form-control" required name="nominal"  value="<?php echo $response["data"]["nominal"];?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Departure Time<span>*</span></label>
                                <input type="text" class="form-control" name="departureTime1" required  value="<?php echo $response["data"]["departureTime1"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Arrival Time<span>*</span></label>
                                <input type="text" class="form-control" required name="arrivalTime1"  value="<?php echo $response["data"]["arrivalTime1"];?>"readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Reservation Date<span>*</span></label>
                                <input type="text" class="form-control" required name="reservationDate" value="<?php echo $response["data"]["reservationDate"];?>"readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Time Limit<span>*</span></label>
                                <input type="text" class="form-control" name="timeLimit" required  value="<?php echo $response["data"]["timeLimit"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Transaction ID<span>*</span></label>
                                <input type="text" class="form-control" required name="transaction_id" value="<?php echo $response["data"]["transactionId"];?>"readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Seat<span>*</span></label>
                                <textarea class="form-control" rows="6" cols="6" readonly><?= $seat ?>
                    </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn_book">Simpan</button>
                            </div>
                        </div>

                    </div>

                </div>
                    </div>
                    <?php }?>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<?php $this->load->view('layout/footer')?>