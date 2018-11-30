<!--<style>-->
<!--    .ui-draggable, .ui-droppable {-->
<!--	background-position: top;-->
<!--}-->
<!--.custom-combobox {-->
<!--		position: relative;-->
		<!--/* display: inline-block; */-->
<!--	}-->
<!--	.custom-combobox-toggle {-->
<!--		position: absolute;-->
<!--		top: 0;-->
<!--		bottom: 0;-->
<!--		margin-left: -1px;-->
<!--		padding: 0;-->
<!--	}-->
<!--	.custom-combobox-input {-->
<!--		margin: 0;-->
<!--		padding: 5px 10px;-->
<!--	}-->
<!--</style>	-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Register</h1>
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
                                    <h3>Registrasi</h3>
                                    <p>Silahkan isi daftar untuk membuat akun reservasi</p>
                                    <form method="post" action="<?=site_url('register.do')?>">
                                           
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"  required
                                                <?php if (isset($nama)!=null) echo 'value="'.$nama.'"';?>
                                             />
                                             <span><i class="fa fa-user"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Username" name="username"  required
                                                <?php if (isset($username)!=null) echo 'value="'.$username.'"';?>/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
        

                                        <div class="form-group">
                                             <input type="email" class="form-control" placeholder="Email" name="email" required
                                                <?php if (isset($email)!=null) echo 'value="'.$email.'"';?>/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input type="password" class="form-control" placeholder="Password" name="password"  required
                                                <?php if (isset($password)!=null) echo 'value="'.$password.'"';?>/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="password" class="form-control" placeholder="Confirm Password" name="passconf"  required
                                                <?php if (isset($passconf)!=null) echo 'value="'.$passconf.'"';?>/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Phone Number" name="telp" required
                                                <?php if (isset($telp)!=null) echo 'value="'.$telp.'"';?>/>
                                             <span><i class="fa fa-phone-square"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Alamat" name="alamat"  required
                                                <?php if (isset($alamat)!=null) echo 'value="'.$alamat.'"';?>/>
                                             <span><i class="fa fa-location-arrow"></i></span>
                                        </div>
                                        <!-- <div class="form-group ui-widget">
                                            <select class="combobox form-control">                                            
                                                <option value="">Pilih Kota</option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Sidoarjo">Sidoarjo</option>    
                                            </select>                                            
                                        </div>-->
                                        
                                        <button class="btn btn-orange btn-block">Register</button>
                                    </form>
                                    
                                    <div class="other-links">
                                      <p class="link-line">Already Have An Account ? <a href="<?=site_url('login.html')?>">Login Here</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="<?=base_url('assets/images/rizaltrans/login-img.jpg')?>" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <!--<script type="text/javascript" src="<?=base_url('assets/js/custom-select.js')?>"></script>-->