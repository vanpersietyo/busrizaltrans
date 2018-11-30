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
                <div class="col-sm-12">
                    <h3><?=$nama_armada?></h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 content-side">
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
                            <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data"><?=$kapasitas_armada?></p></div></li>
                        </ul>
                    </div><!-- end detail-slider -->
                </div><!-- end columns -->
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="detail-tabs m-t-b-15">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#car-information" data-toggle="tab">Infromasi Bus</a></li>
                            <li><a href="#cr-features" data-toggle="tab">Fasilitas</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="car-information" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-12 tab-text">
                                        <h4>Informasi Bus</h4>
                                        <p><?=$keterangan_armada?></p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end car-information -->

                            <div id="cr-features" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-12 tab-text">
                                        <h4>Fasilitas Bus</h4>
                                        <ul>
                                            <?php
                                                foreach ($fasilitas as $fasilitas){?>
                                                    <li><?=$fasilitas->nama_fasilitas?></li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end cr-features -->

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->
                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end car-listing -->
</section><!-- end innerpage-wrapper -->

<script src="<?=base_url('assets/js/slick.min.js')?>"></script>
<script src="<?=base_url('assets/js/custom-slick.js')?>"></script>