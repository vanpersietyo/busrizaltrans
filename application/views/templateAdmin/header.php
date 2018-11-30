<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?> - Rizal Trans</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css"> -->
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/iCheck/all.css')?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/bootstrap-daterangepicker/daterangepicker.css')?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/third_party/').'bootstrap-selectpicker/dist/css/bootstrap-select.min.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/admin/AdminLTE.min.css')?>">
    <!-- AdminLTE Skins-->
    <link rel="stylesheet" href="<?=base_url('assets/css/admin/skins/skin-blue.min.css')?>">
    <!-- Custom AdminLTE css-->
    <link rel="stylesheet" href="<?=base_url('assets/css/admin/custom.css')?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
    <!--Font Awesome 5.3-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Jquery-->
    <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <!--    sweet alert-->
    <link rel="stylesheet"  href="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.css'?>">
    <!--    select 2-->
    <link rel="stylesheet"  href="<?=base_url('assets/third_party/').'select2/dist/css/select2.min.css'?>">
</head>


<style>
    #fountainG{
        position:relative;
        width:234px;
        height:28px;
        margin:auto;
    }

    .fountainG{
        position:absolute;
        top:0;
        background-color:rgb(0,0,0);
        width:28px;
        height:28px;
        animation-name:bounce_fountainG;
        -o-animation-name:bounce_fountainG;
        -ms-animation-name:bounce_fountainG;
        -webkit-animation-name:bounce_fountainG;
        -moz-animation-name:bounce_fountainG;
        animation-duration:1.5s;
        -o-animation-duration:1.5s;
        -ms-animation-duration:1.5s;
        -webkit-animation-duration:1.5s;
        -moz-animation-duration:1.5s;
        animation-iteration-count:infinite;
        -o-animation-iteration-count:infinite;
        -ms-animation-iteration-count:infinite;
        -webkit-animation-iteration-count:infinite;
        -moz-animation-iteration-count:infinite;
        animation-direction:normal;
        -o-animation-direction:normal;
        -ms-animation-direction:normal;
        -webkit-animation-direction:normal;
        -moz-animation-direction:normal;
        transform:scale(.3);
        -o-transform:scale(.3);
        -ms-transform:scale(.3);
        -webkit-transform:scale(.3);
        -moz-transform:scale(.3);
        border-radius:19px;
        -o-border-radius:19px;
        -ms-border-radius:19px;
        -webkit-border-radius:19px;
        -moz-border-radius:19px;
    }

    #fountainG_1{
        left:0;
        animation-delay:0.6s;
        -o-animation-delay:0.6s;
        -ms-animation-delay:0.6s;
        -webkit-animation-delay:0.6s;
        -moz-animation-delay:0.6s;
    }

    #fountainG_2{
        left:29px;
        animation-delay:0.75s;
        -o-animation-delay:0.75s;
        -ms-animation-delay:0.75s;
        -webkit-animation-delay:0.75s;
        -moz-animation-delay:0.75s;
    }

    #fountainG_3{
        left:58px;
        animation-delay:0.9s;
        -o-animation-delay:0.9s;
        -ms-animation-delay:0.9s;
        -webkit-animation-delay:0.9s;
        -moz-animation-delay:0.9s;
    }

    #fountainG_4{
        left:88px;
        animation-delay:1.05s;
        -o-animation-delay:1.05s;
        -ms-animation-delay:1.05s;
        -webkit-animation-delay:1.05s;
        -moz-animation-delay:1.05s;
    }

    #fountainG_5{
        left:117px;
        animation-delay:1.2s;
        -o-animation-delay:1.2s;
        -ms-animation-delay:1.2s;
        -webkit-animation-delay:1.2s;
        -moz-animation-delay:1.2s;
    }

    #fountainG_6{
        left:146px;
        animation-delay:1.35s;
        -o-animation-delay:1.35s;
        -ms-animation-delay:1.35s;
        -webkit-animation-delay:1.35s;
        -moz-animation-delay:1.35s;
    }

    #fountainG_7{
        left:175px;
        animation-delay:1.5s;
        -o-animation-delay:1.5s;
        -ms-animation-delay:1.5s;
        -webkit-animation-delay:1.5s;
        -moz-animation-delay:1.5s;
    }

    #fountainG_8{
        left:205px;
        animation-delay:1.64s;
        -o-animation-delay:1.64s;
        -ms-animation-delay:1.64s;
        -webkit-animation-delay:1.64s;
        -moz-animation-delay:1.64s;
    }

    @keyframes bounce_fountainG{
        0%{
            transform:scale(1);
            background-color:rgb(0,0,0);
        }

        100%{
            transform:scale(.3);
            background-color:rgb(255,255,255);
        }
    }

    @-o-keyframes bounce_fountainG{
        0%{
            -o-transform:scale(1);
            background-color:rgb(0,0,0);
        }

        100%{
            -o-transform:scale(.3);
            background-color:rgb(255,255,255);
        }
    }

    @-ms-keyframes bounce_fountainG{
        0%{
            -ms-transform:scale(1);
            background-color:rgb(0,0,0);
        }

        100%{
            -ms-transform:scale(.3);
            background-color:rgb(255,255,255);
        }
    }

    @-webkit-keyframes bounce_fountainG{
        0%{
            -webkit-transform:scale(1);
            background-color:rgb(0,0,0);
        }

        100%{
            -webkit-transform:scale(.3);
            background-color:rgb(255,255,255);
        }
    }

    @-moz-keyframes bounce_fountainG{
        0%{
            -moz-transform:scale(1);
            background-color:rgb(0,0,0);
        }

        100%{
            -moz-transform:scale(.3);
            background-color:rgb(255,255,255);
        }
    }
</style>

<script>
    function loading() {
        swal({html : '<div id="fountainG">' +
            '<div id="fountainG_1" class="fountainG"></div>' +
            '<div id="fountainG_2" class="fountainG"></div>' +
            '<div id="fountainG_3" class="fountainG"></div>' +
            '<div id="fountainG_4" class="fountainG"></div>' +
            '<div id="fountainG_5" class="fountainG"></div>' +
            '<div id="fountainG_6" class="fountainG"></div>' +
            '<div id="fountainG_7" class="fountainG"></div>' +
            '<div id="fountainG_8" class="fountainG"></div>' +
            '</div>',
            showCancelButton: false,
            showConfirmButton: false,
            allowOutsideClick: false,});
    }
    $(document).ready(function(){
        $(document).ajaxError(function(){
            swal.close();
            swal(
                'Maaf!',
                'Ada Sesuatu Yang Salah!',
                'Error'
            )
        });
    });
</script>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="transactions.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>RT</b></span>
        <!-- logo for regular state and mobile devices -->
        <!-- <span class="logo-lg"><img src="images/logo.svg" alt="Logo"></span> -->
      </a>

      <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="visible-xs">Menu</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

						<li class="dropdown notifications-menu notifikasi">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="label label-warning">0</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 0 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>

                    <!-- User Profile Menu -->
                    <li class="dropdown notifications-menu user-menu z-user-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span><?=$this->session->userdata('username')?></span>
					</a>
                        <ul class="dropdown-menu">
                            <li class="footer"><a href="<?=site_url('')?>"><i class="fa fa-sign-out"></i> Homepage</a></li>
                            <li class="footer"><a href="<?=site_url('logout.do')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
      <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <!-- Optionally, you can add icons to the links -->
            <li class="<?php if(isset($menu)==TRUE){if ($menu=='Dashboard'){echo 'active';};}?>">
                <a href="<?=site_url('admin/dashboard')?>">
                    <i class="fa fa-tasks"></i> Dashboard
                </a>
            </li>

            <li class="header">Data Transaksi</li>
			<li class="<?php if(isset($menu)==TRUE){if ($menu=='Jenis Armada'){echo 'active';};}?>">
				<a href="<?=base_url('admin/list_pesanan')?>">
					<i class="fa fa-list-alt"></i>
					<span>List Pesanan</span>
				</a>
			</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Tambah Pesanan</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('admin/add_booking')?>"><i class="fa fa-circle-o"></i>Request</a></li>
                    <li><a href="<?=base_url('admin/booking.html')?>"><i class="fa fa-circle-o"></i>Paket</a></li>
                </ul>
            </li>


            <li class="header">Data Master</li>

            <li class="<?php if(isset($menu)==TRUE){if ($menu=='Fasilitas'){echo 'active';};}?>">
                <a href="<?=base_url('admin/list_fasilitas.html')?>">
                    <i class="fa fa-list-alt"></i>
                    <span>Fasilitas</span>
                </a>
            </li>

            <li class="<?php if(isset($menu)==TRUE){if ($menu=='Jenis Armada'){echo 'active';};}?>">
                <a href="<?=base_url('admin/jenis_armada')?>">
                    <i class="fa fa-list-alt"></i>
                    <span>Jenis Armada</span>
                </a>
            </li>

            <li class="<?php if(isset($menu)==TRUE){if ($menu=='Armada'){echo 'active';};}?>">
                <a href="<?=base_url('admin/list_armada.html')?>">
                    <i class="fa fa-plus-square"></i>
                    <span>Armada</span>
                </a>
            </li>

<!--            <li><a href="--><?//=base_url('admin/list_waktu.html')?><!--"><i class="fa fa-clock-o"></i> <span>Waktu</span></a></li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Harga</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('admin/harga_request.html')?>"><i class="fa fa-circle-o"></i>Request</a></li>
                    <li><a href="<?=base_url('admin/harga_paket.html')?>"><i class="fa fa-circle-o"></i>Paket</a></li>
                </ul>
            </li>

            <li class="treeview <?php if(isset($menu)==TRUE){if ($menu=='Kota'){echo 'active';};}?>">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Kota</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if(isset($submenu)==TRUE){if ($submenu=='Penjemputan'){echo 'active';};}?>" ><a href="<?=base_url('admin/kota_penjemputan.html')?>"><i class="fa fa-circle-o"></i>Penjemputan</a></li>
                    <li class="<?php if(isset($submenu)==TRUE){if ($submenu=='Tujuan'){echo 'active';};}?>" ><a href="<?=base_url('admin/kota_tujuan.html')?>"><i class="fa fa-circle-o"></i>Tujuan</a></li>
                </ul>
            </li>

			<li class="<?php if(isset($menu)==TRUE){if ($menu=='Customer'){echo 'active';};}?>">
				<a href="<?=base_url('admin/list_customer')?>">
					<i class="fa fa-list-alt"></i>
					<span>Customer</span>
				</a>
			</li>

            <li class="header">Data User</li>
            <li><a href="#"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="#"><i class="fa fa-user-plus"></i> <span>Add User</span></a></li>
            <li><a href="<?=base_url('admin/list_user.html')?>"><i class="fa fa-users"></i> <span>User Lists</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
    <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
			<div class="notify"></div>
