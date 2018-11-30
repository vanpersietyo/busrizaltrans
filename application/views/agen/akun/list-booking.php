<!--========== PAGE-COVER =========-->
<section class="page-cover dashboard" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">My Account</h1>                        
            </div>
        </div>
    </div>
</section>

<section class="innerpage-wrapper">
    <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="dashboard-heading">
                        <p>Data Pesanan <?=$this->session->userdata('username');?></p>
                    </div>

                    <div class="sidebar-account m-t-b-30">
                        <div class="row">                        
                            <div class="col-xs-12 col-sm-2 account-menu">
                               <div class="row">
                                    <ul class="nav nav-tabs nav-stacked p-t-b-15">
                                        <li><a href="<?=site_url('agen/userprofile')?>"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li><a href="<?=site_url('agen/loyaltypoint')?>"><span><i class="fa fa-heart"></i></span>Point Saya</a></li>
                                        <li class="active"><a href="<?=site_url('agen/listbooking')?>"><span><i class="fa fa-briefcase"></i></span>Data Booking</a></li>
                                        <li><a href="<?=site_url('agen/message')?>"><span><i class="fa fa-briefcase"></i></span>Message</a></li>
                                    </ul>
                               </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-10 user-profile">
                                <div class="">
                                <div class="col-sm-12 profile-user p-t-b-15 dashboard-content booking-trips p-l-15">
                                    <div class="dashboard-listing booking-listing">
                                        <table class="table table-responsive table-list-booking">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Bus</th>
                                                    <th>Kode Booking</th>
                                                    <th>Tgl Booking</th>
                                                    <th>Tgl Berangkat</th>
                                                    <th>Tujuan</th>
                                                    <th>Status</th>
                                                    <th>Sisa Pembayaran</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody id="showdata">
                                            <tr>
                                                <td>1</td>
                                                <td>Bus Jet Bus HD</td>
                                                <td>KSKL</td>
                                                <td>24/10/2018</td>
                                                <td>24/10/2018</td>
                                                <td>Bandung</td>
                                                <td>Pending</td>
                                                <td>Rp. 1.500.000</td>
                                                <td><a href="<?=base_url('Agen/booking_detail')?>" class="btn btn-info item-edit">Detail</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

<!--                                        <div class="dash-listing-heading">-->
<!--                                            <div class="custom-radio">-->
<!--                                                <input type="radio" id="radio01" name="radio" checked="">-->
<!--                                                <label for="radio01"><span></span>All Types</label>-->
<!--                                            </div>-->
<!--                                            <div class="custom-radio">-->
<!--                                                <input type="radio" id="radio02" name="radio">-->
<!--                                                <label for="radio02"><span></span>Pending</label>-->
<!--                                            </div>-->
<!--                                            <div class="custom-radio">-->
<!--                                                <input type="radio" id="radio03" name="radio">-->
<!--                                                <label for="radio03"><span></span>Issued</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="table-responsive">-->
<!--                                            <table class="table table-hover">-->
<!--                                                <tbody>-->
<!--                                                <tr>-->
<!--                                                    <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>Oktober</p></div></td>-->
<!--                                                    <td class="dash-list-text booking-list-detail">-->
<!--                                                        <h3>Bus SHD Jet BUS</h3>-->
<!--                                                        <ul class="list-unstyled booking-info">-->
<!--                                                            <li><span>Tanggal Booking:</span> 24 September 2018 20:30 WIB</li>-->
<!--                                                            <li><span>Tanggal Keberangkatan:</span> 25 Oktober 2017</li>-->
<!--                                                            <li><span>Status : Menunggu Pembayaran</span></li>-->
<!--                                                        </ul>-->
<!--                                                    </td>-->
<!--                                                    <td class="dash-list-btn"><button class="btn btn-success btn-block">Detail</button></td>-->
<!--                                                </tr>-->
<!---->
<!--                                                </tbody>-->
<!--                                            </table>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</section>
