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
                    foreach ($schedule as $a){?>

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="#">
                                        <img src="<?=base_url('/').$a->foto_armada?>" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <?php
                                            $price = $a->harga - $a->potongan_harga;
                                            ?>
                                            <li class="price"><span class="divider">IDR. <?=number_format($price)?></span><span class="pkg"><?=$a->durasi;?> Hari Tour</span></li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html"><?=$a->nama_harga?></a></h3>
                                    <!-- <p class="block-minor">Range Rover</p> -->
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
                                                <li><span><i class="fas fa-microphone"></i></span></li>
                                            <?php
                                            }
                                            if ($fas->id_fasilitas == 13){?>
                                                <li><span><i class="fas fa-tv"></i></span></li>
                                                <?php
                                            }
                                            
                                        }
                                    }
                                    ?>
                                        
                                        
                                        
                                        
                                    </ul>
                                    <a href="<?=base_url('bus/passanger')?>" class="btn btn-green btn-lg">Pesan Sekarang</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                    <?php
                    }
                    }
                    ?>



                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end car-listing -->
</section><!-- end innerpage-wrapper -->