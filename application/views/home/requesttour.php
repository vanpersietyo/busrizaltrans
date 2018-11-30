<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Request Tour</h1>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end page-cover -->


<!-- notif -->
<?=$this->session->flashdata('register');?>
<!-- notif -->

<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="registration" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="flex-content">
                        <div class="custom-form custom-form-fields">
                            <h3>Request Tour</h3>
                            <p>Apakah anda memiliki rencana perjalanan sendiri? silahkan isi form dibawah dengan informasi sedetail mungkin</p>
                            <p><strong>Tim kami akan segera memberikan respon maksimal dalam waktu 1x24 Jam</strong></p>
                            <p>Untuk konsultasi, silahkan kontak tim support online kami:
                                <ul style="color:#808285">
                                    <li><strong>Rizal </strong>081357874401</li>
                                </ul>
                            </p>
                            <form method="post" action="<?=site_url('#')?>">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"  required/>
                                    <span><i class="fa fa-user"></i></span>
                                </div>


                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nomer Telepon" name="telp" required/>
                                    <span><i class="fa fa-phone-square"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jumlah Peserta Tour" name="totalpassenger" required/>
                                    <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Transportasi" name="transport"  required/>
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control" name="tourdate"  required/>
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Kota Asal" name="origin"  required/>
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Kota Tujuan" name="destination"  required/>
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="note" placeholder="Catatan Tambahan" required></textarea>
                                    <span><i class="fa fa-sticky-note"></i></span>
                                </div>


                                <button class="btn btn-orange btn-block">Submit</button>
                            </form>


                        </div><!-- end custom-form -->

                        <div class="flex-content-img custom-form-img">
                            <img src="<?=base_url('assets/images/rizaltrans/img-request-tour.jpg')?>" class="img-responsive" style="height: auto;" alt="registration-img" />
                        </div><!-- end custom-form-img -->
                    </div><!-- end form-content -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end registration -->
</section><!-- end innerpage-wrapper -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!--<script type="text/javascript" src="<?=base_url('assets/js/custom-select.js')?>"></script>-->