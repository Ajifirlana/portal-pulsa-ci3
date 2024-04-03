<?php
if (empty($garuda['data'])) {?>
    <!-- <a href="#" class="btn btn-more animate-reveal"> <i class="fa fa-eye"></i><? print_r($garuda);?></a> -->
    <?php }else{?>
<?php $i=0; 
foreach ($garuda['data'][0]["classes"][$i] as $row) {?>
                <div class="flight_box_detail white-box">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="flight-logo">
                                
                            
                            <?=$garuda['data'][0]["airlineName"]?>     
                           <br>
                            <img  alt="logo" src="<?= $garuda['data'][0]['airlineIcon']?>" width="50px" height="50px" >
                        
                        </div>
                        </div>
                        <div class="col-md-8">
                            <div class="details-text">
                                <h4>Departure : <?=$row["departureName"]?><a href="#" class="btn btn-stop">Class <?=$row["class"]?></a> <br><small>Arrival :<?=$row["arrivalName"]?></small></h4>
                            </div>
                            <div class="details-feature">
                                <ul class="list-inline list-unstyled">
                                    
                                    <li>Availability <?= $row['availability']?></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane"></i> Depature</span><br>
                                        <span class="time"><?= $row["depatureTime"] ?> <?= $row["departureTimeZoneText"] ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane fa-rotate-90"></i> Arrival</span><br>
                                        <span class="time"><?= $row["arrivalTime"] ?> <?= $row["arrivalTimeZoneText"] ?></span>
                                        <!-- Wed Nov 13, 2013 7:50 Am -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT no-border">
                                        <span class="skin-clr"> <i class="fa fa-clock-o"></i>Flight Code</span><br>
                                        <span class="time"><?=$row["flightCode"]?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="select-sec">

                                <span>AVG/PERSON <br> <span class="pri"><?= number_format($row["price"]) ?>
                            <br>                            <a class="btn btn_select" data-toggle="modal" data-target="#detailModal-<?= $row["price"] ?>" >Detail</a>

                            </span></span>
                               
                                
                                <?php 
                            if(!empty($this->session->userdata('username'))){?>
                                
                               <p>
                                <a class="btn btn_select" data-toggle="modal" data-target="#exampleModal-<?= $row["class"] ?>" >Pilih</a>

                                 
                           <?php }else{?>
                           <a href="https://api.whatsapp.com/send?phone=+6282382709777&text=Hallo ! Saya tertarik dengan tiket di situs website https://queue.co.id/"  class="btn btn_select" target="_blank">Order</a>
                                
                           <?php }?>  
                        
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">  
                    <div class="col-md-2">
                           </div>    
                           
                        </div>                  
                </div>

<?php }?>

<?php }?>

<?php include'modal-garuda.php';?>