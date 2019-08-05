<!--============= PAGE-COVER =============-->
<section class="page-cover dashboard" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Schedule</h1>                        
            </div>
        </div>
    </div>
</section>

<section class="innerpage-wrapper">
    <div id="bus-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">        	
                
                <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                                
                    <div class="side-bar-block filter-block">
                        <h3><i class="fa fa-search"></i> Filter</h3>
                        <div class="row">
                            <form action="<?=base_url('bus/schedule')?>" method="post">
                                <div class="col-sm-12">
                                    <div class="widget-search-filter p-t-b-10">
                                        <input type="text" class="form-control" placeholder="Lokasi Penjemputan" name="departure">
                                        <i class="fa fa-street-view"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="widget-search-filter p-t-b-10">
                                        <input type="text" class="form-control" placeholder="Lokasi Tujuan" name="departure">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="widget-search-filter p-t-b-10">
                                        <input type="text" class="form-control dpd1" placeholder="Tanggal Berangkat" >
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="widget-search-filter p-t-b-10">
                                        <button type="submit" class="btn btn-block btn-green">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end side-bar-block -->


                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <?php
                    if ($schedule == null) {?>
                        <h5 class="text-center">Untuk kota tersebut jadwal bus masih belum tersedia</h5>
                    <?php
					}else{
					echo form_open('bus/passanger', array('id'=>'BusSchedule'));?>
					<input type="hidden" id="datedeparture" name="datedeparture" value="<?=$date_departure?>">
					<input type="hidden" id="departure" name="departure" value="<?=$departure?>">
					<input type="hidden" id="arrival" name="arrival" value="<?=$arrival?>">
					<input type="hidden" id="priceArmada" name="priceArmada" value="">
					<?php
                    foreach ($schedule as $a){?>

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="list-info cr-list-info">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="<?=base_url('/').$a->foto_armada?>" class="obj-fit-cover" alt="car-img" />
                                            </div>
                                            <div class="col-sm-8 detail-list">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                    <h3 class="block-title title-package"><a href="#"><?=$a->nama_harga?></a></h3> 
                                                    <ul class="list-unstyled list-inline car-features">
                                                        <?php
                                                        foreach ($fasilitas as $fas){
                                                            if ($fas->id_armada == $a->id_armada){
                                                                if ($fas->id_fasilitas == 9){?>
                                                                    <li><span><i class="fas fa-snowflake-o "></i></span></li>
                                                                <?php
                                                                }
                                                                if ($fas->id_fasilitas == 12){?>
                                                                    <li><span><i class="fas fa-smoking"></i></span></li>
                                                                <?php
                                                                }
                                                                if ($fas->id_fasilitas == 10){?>
                                                                    <li><span><i class="fas fa-microphone-alt"></i></span></li>
                                                                <?php
                                                                }
                                                                if ($fas->id_fasilitas == 13){?>
                                                                    <li><span><i class="fas fa-tv"></i></span></li>
                                                                <?php
                                                                }
                                                                if ($fas->id_fasilitas ==19) {?>
                                                                    <li><span><i class="fas fa-charging-station"></i></span></li>
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="row">
                                                                    <?php
                                                                        $price = $a->harga - $a->potongan_harga;
                                                                    ?>
                                                                    <label class="text-center price-schedule">Rp. <?=number_format($price)?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="row">
                                                                    <div class="grid-btn">
                                                                        <input type="button" id="<?=$a->kode_harga?>" class="busDetail btn btn-green btn-lg btn-block m-t-0" value="Booking">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    <?php
					}
					echo form_close();?>
					</div>
					<?php
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
$(document).on("click",".busDetail",function() {
    console.log(this.id);
    $("#datedeparture").val();
    $("#departure").val();
    $("#arrival").val();
	$("#priceArmada").val(this.id);
    $("#BusSchedule").submit();
})
</script>
