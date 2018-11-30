<link rel="stylesheet" href="<?=base_url('assets/css/slick.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/slick-theme.css')?>">

<!--============= PAGE-COVER =============-->
<section class="page-cover dashboard" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Bus Detail</h1>
            </div>
        </div>
    </div>
</section>

<section class="innerpage-wrapper">
    <div id="bus-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar">

                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price">Rp. 3,000,000 <span class="name-bus-booking">BUS Jet Bus SHD</span></h2>

                        <div class="booking-form">
                            <h3>Data Pemesan</h3>
                            <?=form_open('confirm_book')?>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" required/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" required/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="No. KTP" required/>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" required/>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Alamat" class="form-control"></textarea>
                                </div>

                                <button class="btn btn-block btn-green">Lanjutkan</button>
                            <?=form_close()?>

                        </div><!-- end booking-form -->
                    </div><!-- end side-bar-block -->


                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-8 content-side">

                    <div class="detail-slider">
                        <div class="feature-slider">
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-img"/></div>
                        </div><!-- end feature-slider -->

                        <div class="feature-slider-nav">
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="feature-thumb"/></div>
                        </div><!-- end feature-slider-nav -->

                        <ul class="list-unstyled features tour-features">
                            <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data">60</p></div></li>
                            <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">7 DAYS</p></div></li>
                            <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li>
                        </ul>
                    </div><!-- end detail-slider -->

                    <div class="detail-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#car-information" data-toggle="tab">Car Information</a></li>
                            <li><a href="#cr-features" data-toggle="tab">Features</a></li>
                            <li><a href="#rental-info" data-toggle="tab">Rental Info</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="car-information" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-12 tab-text">
                                        <h3>Informasi Bus</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end car-information -->

                            <div id="cr-features" class="tab-pane">
                                <div class="row">
                                   <div class="col-sm-12 tab-text">
                                        <h3>Fitur Bus</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end cr-features -->

                            <div id="rental-info" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-12 tab-text">
                                        <h3>Informasi Rental</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end rental-info -->

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->

                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end car-listing -->
</section><!-- end innerpage-wrapper -->

<script src="<?=base_url('assets/js/slick.min.js')?>"></script>
<script src="<?=base_url('assets/js/custom-slick.js')?>"></script>