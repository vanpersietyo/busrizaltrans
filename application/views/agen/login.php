        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Login</h1>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end page-cover -->
        
        <!-- notif -->
        <?=$this->session->flashdata('login');?>
        <!-- notif -->

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Login</h3>
                                    <h5>Silahkan login untuk bisa akses sistem reservasi</h5>
                                    <form method="post" action="<?=base_url('login.do')?>" >
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Username or Email" name="username"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input type="password" class="form-control" placeholder="Password" name="password"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                                                                
                                        <button type="submit" class="btn btn-orange btn-block">Login</button>
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">Belum punya akun ? <a href="<?=site_url('register.html')?>">Daftar</a></p>
                                        <a class="simple-link" href="<?=site_url('forgot_password.html')?>">Lupa Password ?</a>
                                    </div><!-- end other-links -->
<!--                                     <div class="other-links">
                                    	<p class="link-line">Atau masuk dengan</p>
                                        
                                    <button type="submit" class="btn btn-facebook"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Facebook</button>
                                <button type="submit" class="btn btn-google"><span><i class="fa fa-google" aria-hidden="true"></i></span>Google</button></div> -->
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
        