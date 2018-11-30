        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Change Password</h1>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end page-cover -->
        
        <!-- notif -->
        <?=$this->session->flashdata('forgot_password');?>
        <!-- notif -->
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Change Password</h3>
                                    <h5>Silakan Masukkan Password Baru Anda</h5>
                                    <form method="POST" action="<?=site_url('change_password.html')?>">
                                            
                                        <input type="hidden" name="token" value="<?=$token?>">
                                        <div class="form-group">
                                             <input type="password" name="password" class="form-control" placeholder="Your New Password" required="required">
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="password" name="passconf" class="form-control" placeholder="Confirm Your New Password" required="required">
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                                                                
                                        <button class="btn btn-orange btn-block">Change</button>
                                    </form>
                                    
                                    <div class="other-links">
                                        <p class="link-line">Sudah punya akun ? <a href="<?=site_url('login.html')?>">Login</a></p>
                                        <p class="link-line">Member Baru ? <a href="<?=site_url('register.html')?>">Daftar</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="<?=base_url('assets/images/rizaltrans/login-img.jpg')?>" class="img-responsive" alt="Login-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end login -->
        </section><!-- end innerpage-wrapper -->
        