<!--========== PAGE-COVER =========-->
<section class="page-cover dashboard" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Profile <?=$this->session->userdata('username')?></h1>
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
<!--                        <p class="dash-content-title">My Profile</p>-->
                        <!--                        <p>Hi (nama Akun), Welcome to Rizal Trans</p>-->
                    </div>

                    <div class="sidebar-account m-t-b-30">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 account-menu">
                                <div class="row">
                                    <ul class="nav nav-tabs nav-stacked p-t-b-15">
                                        <li class="active"><a href="<?=site_url('account.html')?>"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li><a href="<?=site_url('point.html')?>"><span><i class="fa fa-heart"></i></span>Point Saya</a></li>
                                        <li><a href="<?=site_url('booking.html')?>"><span><i class="fa fa-briefcase"></i></span>Data Booking</a></li>
                                        <li><a href="<?=site_url('messages.html')?>"><span><i class="fa fa-briefcase"></i></span>Message</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 user-profile">
                                <div class="">
                                    <div class="col-sm-12 profile-user p-t-b-15">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span><i class="fa fa-user"></i> <?=$data->username;?> </span>
                                                <button class="btn btn-green edit-profil" data-toggle="modal" data-target="#edit-profile">Edit Profil</button>
                                            </div>
                                            <div class="col-sm-12 detail-profile">
                                                <ul class="list-unstyled">
                                                    <li><span>Nama:</span> <?=$data->nama_lengkap;?></li>
                                                    <li><span>Email:</span> <?=$data->email;?></li>
                                                    <li><span>Telepon:</span> <?=$data->telp;?></li>
                                                    <li><span>Alamat:</span> <?=$data->alamat;?></li>
                                                </ul>
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
</section>


<div id="edit-profile" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Edit Profile</h3>
            </div><!-- end modal-header -->

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Name"/>
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" placeholder="mm-dd-yy" />
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="email" class="form-control" placeholder="Email" />
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>Your Phone</label>
                        <input type="text" class="form-control" placeholder="Phone Number" />
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>Your Country</label>
                        <input type="text" class="form-control" placeholder="Country" />
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>Your Address</label>
                        <input type="text" class="form-control" placeholder="Address" />
                    </div><!-- end form-group -->

                    <button class="btn btn-orange">Save Changes</button>
                </form>
            </div><!-- end modal-bpdy -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end edit-profile -->