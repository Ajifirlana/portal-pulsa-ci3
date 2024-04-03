<?php $this->load->view('layout/header') ?>
<?php $this->load->view('layout/nav') ?>
<?php
echo $this->session->flashdata('msg');
?>
<style>
.loader {

    margin-left: auto;
    margin-right: auto;
    width: 50%;
    padding: 10px;

    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid blue;
    border-right: 16px solid green;
    border-bottom: 16px solid red;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>
<div class="inner-body">
    <div class="wrapper-index">
        <div class="wrapper-inner">
            <!--text-box-->
            <div class="row scroll-text hidden-xs">

                <div class="col-sm-12">
                    <div class="text-box hidden-xs">
                        <h3>
                            <span>Pesawat</span> <br>
                            THE WORLD YOU <br> NEVER SEEN <i class="fa fa-car"></i> <br>

                        </h3>

                    </div>
                </div>

            </div>
            <div class="container">
                <!--main-fill-->
                <div class="main-fill ">
                    <!--tabs-->
                    <div class="panel">

                        <!--panel-body-->
                        <div class="panel-body">
                            <!--tab-content-->
                            <div class="tab-content">
                                <!--tabtravel-->


                                <!--tabtour-->

                                <form>
                                    <div class="tab-pane fade in" id="tabtour">
                                        <h3><br>Cari Pesawat</br></h3>

                                        <ul class="list-inline list-unstyled">
                                            <li>
                                                <div class="form-group">

                                                    <select id="airline" name="airline" class="js-example-basic-single"
                                                        style="width:100%;"  onchange="myFunction()">
                                                        <option value="TPQZ">AIRASIA</option>
                                                        <option value="TPGA">GARUDA</option>
                                                        <option value="TPQG">CITILINK</option>

                                                        <option value="TPJT">LION AIR GROUP</option>
                                                        <option value="TPTN">TRIGANA</option>
                                                        <option value="TPSJ">SRIWIJAYA</option>
                                                        <option value="TPMV">TRANSNUSA</option>
                                                        <option value="TPXN">EXPRESS</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <select id="keberangkatan" name="keberangkatan"
                                                        class="js-example-basic-single" style="width:100%;">
                                                        <option>Departure</option>
                                                        <?php foreach ($rute as $row) { ?>
                                                        <option value="<?php echo $row['code']; ?>">
                                                            <?php echo $row['name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <select id="tujuan" name="tujuan" class="js-example-basic-single"
                                                        style="width:100%;">
                                                        <option>Arrival</option>
                                                        <?php
                                                        foreach ($rute as $row) { ?>
                                                        <option value="<?php echo $row['code']; ?>">
                                                            <?php echo $row['name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-group">
                                                    <input type="date" id="departureDate" class="form-control"
                                                        name="departureDate" placeholder="Check In" required />
                                                </div>
                                            </li>


                                            <li>
                                                <a id="btn" class="btn btn-search-travel">Cari
                                                    Sekarang</a>

                                            </li>

                                        </ul>


                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--end panel body-->
                </div>

                <div id="msg" style="display:none;"></div>

                <!--end tabs-->
            </div>

        </div>
    </div>
</div>

</div>
<div class="inner-body">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

            </div>
            <div class="col-md-9 col-xs-12">

                <div id="loader" class="loader" style="display:none;" align="center"></div>


                <div id="data">

                </div>
          
            </div>

        </div>
    </div>
</div>
<!--inner body end from here-->
<!--back_to_top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--end-->

<?php $this->load->view('modal') ?>
<script type="text/javascript">
function myFunction() {
  document.getElementById("data").innerHTML = "";
    document.getElementById('msg').innerHTML = '';
}
document.getElementById('btn').addEventListener("click", get_data);

function get_data(){
  var airline = $('#airline').val();
    var keberangkatan = $('#keberangkatan').val();
    var tujuan = $('#tujuan').val();
    var departureDate = $('#departureDate').val();
    if (departureDate == "") {
    alert("Tanggal perlu diisi");
    return false;
    }
    document.getElementById('loader').style.display = 'block';
    document.getElementById('msg').style.display = 'block';

    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "<?php echo base_url('hasil_pencarian'); ?>",
        beforeSend: function(e) {
            if (e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
        },
        data: {
            airline: airline,
            keberangkatan: keberangkatan,
            tujuan: tujuan,
            departureDate: departureDate
        },
        success: function(data) {
            console.log(data);
            if (data.rd == "sukses" || data.rd == "SUCCESS" || data.rd == "SUKSES") {
                document.getElementById('msg').style.display = 'none';
                document.getElementById('loader').style.display = 'none';
                var i = 0

                $.each(data.data, function(key, value) {

                    console.log(data.data[i]);
                    var arrivalName = "";
                    var arrivalTime = "";
                    var departureName = "";
                    var depatureTime = "";
                    var arrivalTimeZoneText = "";
                    var departureTimeZoneText = "";
                    var klass = "";
                    var availability = "";
                    var price = "";
                    var flightCode = "";
                    value.classes.forEach(classes => {
                        arrivalName = classes[i].arrivalName;
                        arrivalTime = classes[i].arrivalTime;
                        arrivalTimeZoneText = classes[i].arrivalTimeZoneText;
                        departureTimeZoneText = classes[i].departureTimeZoneText;
                        departureName = classes[i].departureName;
                        depatureTime = classes[i].depatureTime;
                        klass = classes[i].class;
                        availability = classes[i].availability;
                        price = classes[i].price;
                        flightCode = classes[i].flightCode;
                    });

                    $('#data').append(
                        '<div class="flight_box_detail white-box"><div class = "row" >\
                                <div class = "col-md-2" >\
                                <div class = "flight-logo" >\
                                ' + value.airlineName + ' \
                                <br >\
            <img alt = "logo"src = "' + value.airlineIcon + '"width = "50px"height = "50px" ></div></div > <div class = "col-md-8" >\
                                <div class = "details-text" >\
                                <h4> Departure: ' + departureName + ' \
                                <a href = "#" class = "btn btn-stop" >\
                                Class ' + klass + '</a>\
                                <br><small>Arrival :' + arrivalName + ' </small> \
                                </h4 >\
                                </div> \
                                <div class = "details-feature" >\
                                <ul class = "list-inline list-unstyled" >\
                                <li > Availability ' + availability + '\
                                </li>\
                                </ul >\
                                </div>\
                                <hr >\
                                <div class = "row" >\
                                <div class = "col-md-4" >\
                                <div class = "LTT" >\
                                <span class = "skin-clr" >\
                                <i class = "fa fa-plane" >\
                                </i> Depature</span >\
                                <br>\
                                <span class = "time" >\
                                ' + depatureTime + ' ' + departureTimeZoneText + '</span>\
                                </div >\
                                </div>\
                                <div class = "col-md-4" >\
                                <div class = "LTT" >\
                                <span class = "skin-clr" >\
                                <i class = "fa fa-plane fa-rotate-90" >\
                                </i>Arrival</span>\
                                <br>\
                                <span class = "time" >\
                                ' + arrivalTime + ' ' + arrivalTimeZoneText + '\
                                </span>\
                                </div >\
                                </div >\
                                <div class = "col-md-4" >\
                                <div class = "LTT no-border" >\
                                <span class = "skin-clr" >\
                                <i class="fa fa-clock-o" >\
                                </i>Flight Code</span >\
                                <br>\
                                <span class = "time" >\
                                ' + flightCode + ' </span>\
                                </div>\
                                </div>\
                                </div>\
                                </div>\
                                <div class = "col-md-2" >\
                                <div class = "select-sec" >\
                                <span> AVG / PERSON <br>\
                                <span class = "pri">\
                            ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '\
                                <br>\
                                </span></span>\
                                <p >\
                                <a href="<?php base_url(); ?>cart/flight/'+klass+'" class = "btn btn_select" target ="_blank"> Pilih </a>\
                    <a href ="https://api.whatsapp.com/send?phone=+6282382709777&text=Hallo ! Saya tertarik dengan tiket di situs website https://queue.co.id/"class = "btn btn_select"target = "_blank" > Order </a>\
                    </div> </div></div> <div class = "row">\
                                <div class = "col-md-2" >\
                               </div>\
                                </div>\
                                </div >');
                });

            } else {
                document.getElementById('loader').style.display = 'none';
                $('#msg').append('<div class="alert alert-success alert-dismissible" role="alert"> \
                        ' + data.rd + ' \
                        </div > ');

            }
        }
    });
}
  
</script>
<?php $this->load->view('layout/footer') ?>