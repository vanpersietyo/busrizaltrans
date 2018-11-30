        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Forgot Password</h1>
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
                                    <h3>Lupa Password</h3>
                                    <h5>Silakan masukkan email akun yang digunakan</h5>
                                    <form method="POST" action="<?=site_url('forgot_password.do')?>">
                                            
                                        <div class="form-group">
                                             <input type="email" name="email" class="form-control" placeholder="Your Email" required="required">
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                                                                
                                        <button class="btn btn-orange btn-block">Send</button>
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
        