<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>

            <a href="<?=site_url('home')?>" class="navbar-brand"><span><img src="<?=base_url('assets/images/rizaltrans/logo.svg')?>" class="img-logo"></a>
        </div><!-- end navbar-header -->
        
        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="<?=site_url('')?>">Home</a></li>
                <li class=""><a href="<?=site_url('profile.html')?>">About Us</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bus<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=site_url('bus')?>">Reservasi Bus</a></li>
                        <li><a href="#">Request Bus</a></li>
                        <li><a href="<?=site_url('armadabus.html')?>">Armada Bus</a></li>
                    </ul>			
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
<!--                        <li><a href="#">Paket Tour</a></li>-->
                        <li><a href="<?=site_url('requesttour')?>">Request Tour</a></li>
                    </ul>
                </li>
                <li class=""><a href="#">Galery</a></li>
                <li role="separator" class="divider"></li>
                <?php 
                    if ($this->session->userdata('logged_in')==TRUE) { ?>

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?><span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">

                            <?php
                                if($this->session->userdata('level')=='1'){ ?>
                                    <li><a href="<?=site_url('admin/dashboard')?>">Panel Admin</a></li>
                            <?php } ?>


                                <li><a href="<?=site_url('agen/userprofile')?>">Panel Akun</a></li>
                                <li class=""><a href="<?=site_url('logout.do')?>">Logout</a></li>
                            </ul>           
                        </li>

                    <?php } else {?>
                        <li class=""><a href="<?=site_url('login.html')?>"><span><i class="fa fa-sign-in link-icon"></i></span>  Login<span></a></li>
                    <?php }
                    
                ?>
                <!-- <li class=""><a href="<?=site_url('home/contact')?>">Contact</a></li> -->
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->
        
<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"></h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->
            
            <div class="list-group panel">
            
                <a href="<?=site_url('home')?>" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Home</a>
                
                <a href="#bus-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-bus link-icon"></i></span>Bus<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="bus-links">
                    <a href="<?=site_url('bus')?>" class="list-group-item">Bus Reservasi</a>
                    <a href="#" class="list-group-item">Request Bus</a>
                    <a href="armadabus.html" class="list-group-item">Armada Bus</a>
                </div><!-- end sub-menu -->

                <a href="#tour-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-suitcase link-icon"></i></span>Tour<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="tour-links">
<!--                    <a href="--><?//=site_url('bus')?><!--" class="list-group-item">Paket Tour</a>-->
                    <a href="<?=site_url('requesttour')?>" class="list-group-item">Request Tour</a>
                </div><!-- end sub-menu -->

                
                <a href="#" class="list-group-item"><span><i class="fa fa-picture-o link-icon"></i></span>Galery<span></a>
                <?php
                if ($this->session->userdata('logged_in')==TRUE) { ?>
                    <a href="#panel-akun" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-user-circle link-icon"></i></span><?=$this->session->userdata('username')?><span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="panel-akun">
                        <?php
                        if($this->session->userdata('level')=='1'){ ?>
                            <a href="<?=site_url('admin/dashboard')?>" class="list-group-item">Panel Akun</a>
                        <?php } ?>
                        <a href="<?=site_url('agen/userprofile')?>" class="list-group-item">Panel Akun</a>
                        <a href="<?=site_url('logout.do')?>" class="list-group-item">Logout</a>
                    </div><!-- end sub-menu -->

                <?php } else {?>
                    <a href="<?=site_url('login.html')?>" class="list-group-item"><span><i class="fa fa-sign-in link-icon"></i></span>Login<span></a>
                <?php }

                ?>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->
        
