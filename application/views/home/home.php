<link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/flexslider.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

        <!-- notif -->
        <?php echo $this->session->flashdata('login');?>
        <!-- notif -->
        
		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-4" style="z-index: 1;">
            
            <div class="flexslider slider tour-slider" id="slider-4">
                <ul class="slides">
                    
                    <li class="item-1 back-size">
                    	<div class="meta">         
                            <div class="container">
                            	<span class="highlight-price highlight-2">HARGA MULAI 5 JUTA-an SAJA </span>
                                <h2>Yogyakarta</h2>
                                <p>
                                    Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini berlokasi di kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta.
                                </p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size">
                        <div class=" meta">         
                            <div class="container">
                            	<span class="highlight-price highlight-2">HARGA MULAI 7 JUTA-an SAJA</span>
                                <h2>Bali</h2>
                                <p>
                                    Bali adalah primadona pariwisata Indonesia yang sudah terkenal di seluruh dunia. Selain terkenal dengan keindahan alam, terutama pantainya, Bali juga terkenal dengan kesenian dan budayanya yang unik dan menarik.
                                </p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->

                    <li class="item-3 back-size">
                        <div class="meta">
                            <div class="container">
                                <span class="highlight-price highlight-2">HARGA MULAI 10 JUTA-an SAJA</span>
                                <h2>Bandung</h2>
                                <p>
                                    Bandung adalah Ibukota provinsi dari Jawa Barat. Kota ini terkenal dengan hawanya yang sejuk dan dikelilingi oleh pegunungan. Pada zaman dahulu Bandung dijuluki sebagai Parijs van Java (Paris dari Jawa).
                                </p>
                            </div><!-- end container -->
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                   
                </ul>
            </div><!-- end slider -->


            <div class="search-tabs" id="search-tabs-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reservasibus" data-toggle="tab"><span><i class="fa fa-bus"></i></span><span class="st-text">Bus Reservasi</span></a></li>
                                <li class=""><a href="#requestbus" data-toggle="tab"><span><i class="fa fa-bus"></i></span><span class="st-text">Bus Request</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="reservasibus" class="tab-pane in active">
                                    <?=form_open('bus/schedule')?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <i class="fa fa-street-view" style="z-index:99;"></i>
                                                        <select class="selectpicker form-control" name="departure" data-show-subtext="true" data-live-search="true">
                                                            <option value="">Kota Keberangkatan</option>
                                                            <?php
                                                            foreach ($kota_awal as $awal){ ?>
                                                                <option><?=$awal->nama_kota ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <select class="selectpicker form-control" name="arrival" data-show-subtext="true" data-live-search="true">
                                                            <option value="">Kota Tujuan</option>
                                                            <?php
                                                            $i = 1;
                                                            foreach ($kota_tujuan as $tujuan){ ?>
                                                                <option><?=$tujuan->nama_kota?></option>
                                                                <?php

                                                            }
                                                            ?>
                                                        </select>
                                                        <i class="fa fa-map-marker" style="z-index:99;"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" name="date_departure" placeholder="Check In" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 btn-submit-search">
                                            <button class="btn btn-green btn-block">Search</button>
                                        </div>
                                    </div>
                                    <?=form_close()?>
                                </div>
                                <div id="requestbus" class="tab-pane">
                                    <?=form_open('bus/schedule')?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <i class="fa fa-street-view" style="z-index:99;"></i>
                                                        <select class="selectpicker form-control" name="departure" data-show-subtext="true" data-live-search="true">
                                                            <option value="">Kota Keberangkatan</option>
                                                            <?php
                                                            foreach ($kota_awal as $awal){ ?>
                                                                <option><?=$awal->nama_kota ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <select class="selectpicker form-control" name="arrival" data-show-subtext="true" data-live-search="true">
                                                            <option value="">Kota Tujuan</option>
                                                            <?php
                                                            $i = 1;
                                                            foreach ($kota_tujuan as $tujuan){ ?>
                                                                <option><?=$tujuan->nama_kota?></option>
                                                                <?php

                                                            }
                                                            ?>
                                                        </select>
                                                        <i class="fa fa-map-marker" style="z-index:99;"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group left-icon">
                                                                <input type="text" class="form-control dpd1" name="date_departure" placeholder="Check In" >
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group left-icon">
                                                                <input type="text" class="form-control dpd1" name="date_arrival" placeholder="Check In" >
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 btn-submit-search">
                                            <button class="btn btn-green btn-block">Search</button>
                                        </div>
                                    </div>
                                    <?=form_close()?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!-- end flexslider-container -->

        <!--=============== Promo ===============-->
        <section id="tour-offers" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
                    	<div class="page-heading">
                        	<h2>Armada Rizal Trans</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                         <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                    	<a href="#">
                                        	<img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="list-bus">
                                        <ul class="list-unstyled">
                                            <li class="bus">Bus SHD Executive<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                        	<img src="<?=base_url('assets/images/rizaltrans/item-5.jpg')?>" class="img-responsive" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="list-bus">
                                        <ul class="list-unstyled">
                                            <li class="bus">Bus HD Hello Kitty<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="#">
                                        	<img src="<?=base_url('assets/images/rizaltrans/tour-3.jpg')?>" class="img-responsive" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="list-bus">
                                        <ul class="list-unstyled">
                                            <li class="bus">Bus HD Ekonomi<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            
                        </div><!-- end owl-tour-offers -->
                        
                        <div class="view-all text-center">
                        	<a href="<?=site_url('armadabus.html')?>" class="btn btn-green">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end tour-offers -->


<?php $this->load->view('template/best_feature')?>
<?php $this->load->view('template/subscribe');?>

    <script src="<?=base_url('assets/js/jquery.flexslider.js')?>"></script>
    <script src="<?=base_url('assets/js/custom-flex.js')?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/js/custom-owl.js')?>"></script>
