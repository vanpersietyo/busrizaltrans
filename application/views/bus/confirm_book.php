<!--============= PAGE-COVER =============-->
<section class="page-cover dashboard" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Booking Detail</h1>
            </div>
        </div>
    </div>
</section>

<section class="innerpage-wrapper">
    <div id="bus-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-offset-3 col-md-6 side-bar left-side-bar">

                    <?=form_open('bus/booking')?>
                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price text-center">Detail Pemesanan</h2>
                        <div class="booking-form">
                            <h4 class="text-bold">Informasi Pesanan</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Nama Bus </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>Sugeng Rahayu</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Lokasi Penjemputan</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>Sidoarjo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Lokasi Tujuan </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>Bandung</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Keberangkatan </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>25 Oktober 2017</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Durasi </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>7 Hari</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Jumlah Kursi </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>60 Seat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Harga</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>Rp. 3.500.000</label>
                                </div>
                            </div>

                            <h4 class="text-bold p-t-15">Data Pemesan</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Nama </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>Adhitya Dwi Prasetyo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>No. KTP</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>3515101803940005</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Email </label>
                                </div>
                                <div class="col-sm-8">
                                    <label>example@gmail.com</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>No. HP</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>085755890903</label>
                                </div>
                            </div>

                            <h4 class="text-bold p-t-15">Total Pembayaran</h4>
                            <div class="total-price-bus">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-5">
                                        <label>Metode Pembayaran </label>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <label>DP 50%</label>
                                    </div>
                                </div>
                                <div class="row total-price-value">
                                    <div class="col-sm-4 col-xs-5">
                                        <label>Harga Total</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <label>Rp. 3.500.000</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 col-xs-5">
                                        <label>Sisa Pembayaran</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <label>Rp. 1.750.000</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-5">
                                        <label>Kode Unik</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <label>Rp. 867</label>
                                    </div>
                                </div>

                                <div class="row m-t-15">
                                    <div class="col-sm-4 col-xs-5">
                                        <h4 class="text-bold">Harga yang Harus di bayar</h4>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <h3 class="text-bold">Rp. 1.750.867</h3>
                                    </div>
                                </div>
                            </div>
                                <button class="btn btn-block btn-green m-t-b-15">Pesan Sekarang</button>

                        </div><!-- end booking-form -->
                    </div><!-- end side-bar-block -->
                    <?=form_close()?>

                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end car-listing -->
</section><!-- end innerpage-wrapper -->
