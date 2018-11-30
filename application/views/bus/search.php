<!-- <section class="container">
        <div class="row">
            <div class="col-md-12 p-t-15">
                <div class="row hidden-md hidden-sm hidden-xs">
                    <img class="steps" src="/Content/images/Step-Pesawat-1S.png">
                    <img class="steps" src="/Content/images/Step-Pesawat-2N.png">
                    <img class="steps" src="/Content/images/Step-Pesawat-3N.png">
                    <img class="steps" src="/Content/images/Step-Pesawat-4N.png">
                    <img src="/Content/images/Step-Pesawat-5N.png">
                </div>
            </div>
        </div>
</section> -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<section id="z-search-form-bus">
    <div class="full-section-container">
        <div id="z-search-form-container" class="container z-searh-form-inside p-t-b-30">
            <form action="<?=base_url('bus/schedule') ?>" method="post">
            <div class="row z-form-search">
                <div class="col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group left-icon">
                                <i class="fa fa-street-view" style="z-index:99;"></i>
                                <select class="selectpicker form-control" name="departure" data-show-subtext="true" data-live-search="true">
                                    <option value="">Kota Keberangkatan</option>
                                    <?php
                                    foreach ($kota_awal as $awal){ ?>
                                        <option value="<?=$awal->id_kota?>"><?=$awal->nama_kota ?></option>
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
                                        <option value="<?=$tujuan->id_kota?>"><?=$tujuan->nama_kota?></option>
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
                    </div><!-- end row -->
                </div><!-- end columns -->
                <div class="col-xs-12 col-sm-3 btn-submit-search">
                    <button type="submit" class="btn btn-green btn-block">Search</button>
                </div><!-- end columns -->
            </div>
            </form>
        </div>
    </div>
</section>

<?php $this->load->view('template/best_feature');?>