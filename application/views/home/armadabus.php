
<section class="page-cover" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Armada Bus</h1>
            </div>
        </div>
    </div>
</section>


<section class="innerpage-wrapper">
    <div id="armada-bus" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="grid-block main-block t-grid-block">
                                <div class="main-img t-grid-img">
                                    <a href="<?=base_url('armadabus/detail/') ?>">
                                        <img src="<?=base_url('assets/images/rizaltrans/tour-2.jpg')?>" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline list-bus">
                                            <li class="bus">Bus HD Ekonomi</li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end t-grid-img -->

                                <div class="block-info t-grid-info">
                                    <p class="block-minor">2 Adults, 02 Kids</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei </p>
                                    <div class="grid-btn">
                                        <a href="<?=base_url('armadabus/detail/') ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                    </div><!-- end grid-btn -->
                                </div><!-- end t-grid-info -->
                            </div><!-- end t-grid-block -->
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="grid-block main-block t-grid-block">
                                <div class="main-img t-grid-img">
                                    <a href="<?=base_url('armadabus/detail/') ?>">
                                        <img src="<?=base_url('assets/images/rizaltrans/item-5.jpg')?>" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline list-bus">
                                            <li class="bus">Bus SHD Hello Kity</li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end t-grid-img -->

                                <div class="block-info t-grid-info">

                                    <p class="block-minor">2 Adults, 02 Kids</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei </p>
                                    <div class="grid-btn">
                                        <a href="<?=base_url('armadabus/detail/') ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                    </div><!-- end grid-btn -->
                                </div><!-- end t-grid-info -->
                            </div><!-- end t-grid-block -->
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="grid-block main-block t-grid-block">
                                <div class="main-img t-grid-img">
                                    <a href="<?=base_url('armadabus/detail/') ?>">
                                        <img src="<?=base_url('assets/images/rizaltrans/bisrizaltrans_hitam.jpeg')?>" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline list-bus">
                                            <li class="bus">Bus SHD Executive</li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end t-grid-img -->

                                <div class="block-info t-grid-info">

                                    <p class="block-minor">2 Adults, 02 Kids</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei </p>
                                    <div class="grid-btn">
                                        <a href="<?=base_url('armadabus/detail/') ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                    </div><!-- end grid-btn -->
                                </div><!-- end t-grid-info -->
                            </div><!-- end t-grid-block -->
                        </div>

                    </div>

                    <div class="row">
                        <?php
                        foreach ($armada as $list){?>
                            <div class="col-sm-6 col-md-4">
                                <div class="grid-block main-block t-grid-block">
                                    <div class="main-img t-grid-img">
                                        <a href="<?=base_url('armadabus/detail/') ?>">
                                            <img src="<?=base_url('assets/images/rizaltrans/tour-2.jpg')?>" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline list-bus">
                                                <li class="bus"><?=$list->nama_armada?></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-info t-grid-info">

                                        <p class="block-minor">Total Seats <?$list->kapasitas_armada?></p>
                                        <p><?=substr($list->keterangan_armada,0,35)?>...</p>
                                        <div class="grid-btn">
                                            <a href="<?=base_url('armadabus/detail/').$list->id_armada ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>