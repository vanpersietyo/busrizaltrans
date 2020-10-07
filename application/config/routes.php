<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

if(file_exists(FCPATH.'.env')){
	$dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
	$dotenv->load();
}

//Blog
$route['blog.html']              ='Blog';
$route['contact.html']           ='home/contact';
$route['armadabus.html']         ='home/armadabus';
$route['armadabus/detail/(:any)']= 'home/armadabus_detail/$1';

//login
$route['login.html'] 			= 'agen';
$route['login.do'] 				= 'agen/proses_login';

//register
$route['register.html'] 		= 'agen/register';
$route['register.do'] 			= 'agen/proses_register';
$route['activate/(:any)'] 		= 'agen/aktivasi_register/$1';

//logout
$route['logout.do'] 			= 'agen/logout';

//forgot passoword
$route['forgot_password.html'] 	= 'agen/forgotpassword';
$route['forgot_password.do'] 	= 'agen/proses_forgotpassword';
$route['change.do/(:any)'] 		= 'agen/update_forgot_password/$1';

//forgot passoword
$route['change_password.html'] 	= 'agen/change_password';
$route['change_password.do'] 	= 'agen/proses_change_password';

//home
$route['profile.html'] 	= 'Home/profile';
$route['newsletter'] 	= 'Home/newsletter';
$route['requesttour'] 	= 'Home/request_tour';


//akun
$route['account.html'] 	= 'agen/userprofile';
$route['point.html'] 	= 'agen/loyalti_point';
$route['agen/listbooking'] 	= 'agen/data_booking';
$route['messages.html'] = 'agen/messages';

//dashboard
$route['admin.html'] 	= 'admin/index';

//master kota
$route['admin/kota_penjemputan.html'] 	= 'admin/list_kota/Penjemputan';
$route['admin/kota_tujuan.html'] 	    = 'admin/list_kota/Tujuan';

//master fasilitas
$route['admin/list_fasilitas.html'] 	    = 'admin/list_fasilitas';
$route['admin/add_fasilitas.do'] 	        = 'admin/add_list_fasilitas/';
$route['admin/delete_fasilitas.do/(:any)'] 	= 'admin/delete_fasilitas/$1';
$route['admin/edit_fasilitas.html/(:any)'] 	= 'admin/edit_fasilitas/$1';
$route['admin/edit_fasilitas.do/(:any)'] 	= 'admin/proses_edit_fasilitas/$1';

//master armada
$route['admin/list_armada.html'] 	        = 'admin/list_armada';
$route['admin/add_armada.do'] 	            = 'admin/add_list_armada/';
$route['admin/delete_armada.do/(:any)'] 	= 'admin/delete_armada/$1';
$route['admin/edit_armada.html/(:any)'] 	= 'admin/edit_armada/$1';
$route['admin/edit_armada.do/(:any)'] 	    = 'admin/proses_edit_armada/$1';

//master waktu
$route['admin/list_waktu.html'] 	        = 'admin/list_waktu';
$route['admin/add_waktu.do'] 	            = 'admin/add_list_waktu/';
$route['admin/delete_waktu.do/(:any)'] 		= 'admin/delete_waktu/$1';
$route['admin/edit_waktu.html/(:any)'] 		= 'admin/edit_waktu/$1';
$route['admin/edit_waktu.do/(:any)'] 	    = 'admin/proses_edit_waktu/$1';

//master user
$route['admin/list_user.html']              ='admin/user_list';

//Bus Search Engine
$route['bus/schedule']                      = 'bus/schedule';
$route['bus']                               = 'bus/index';

//Admin/Booking
$route['admin/booking.html']                = 'C_admin/booking';
$route['admin/add_booking']                 = 'C_admin/booking/add_booking';
$route['admin/proses_add_booking']          = 'C_admin/booking/proses_add_booking';
$route['admin/booking/ajax']                = 'C_admin/booking/cek_ajax';
$route['admin/booking/count_days']          = 'C_admin/booking/hitung_hari_dari_2_tanggal';
$route['admin/add_booking_paket']           = 'C_admin/booking/add_booking_paket';
$route['admin/cari_harga/(:any)']           = 'C_admin/booking/cari_harga/$1';
$route['admin/list_pesanan']           		= 'C_admin/booking/list_pesanan';

//harga
$route['admin/harga_request.html']           = 'admin/daftar_harga/request';
$route['admin/harga_paket.html']             = 'admin/daftar_harga/paket';
$route['admin/form_add_harga_request.html']  = 'admin/form_add_harga/request';
$route['admin/form_add_harga_paket.html']    = 'admin/form_add_harga/paket';

$route['admin/list_harga_request.html']    	= 'admin/daftar_harga_ajax/request';
$route['admin/list_harga_paket.html']    	= 'admin/daftar_harga_ajax/paket';

$route['admin/add_harga']         			 = 'admin/proses_tambah_harga';
$route['admin/edit_harga_request/(:any)'] 	 = 'admin/edit_harga_request/$1';
$route['admin/edit_harga_request.do']        = 'admin/proses_edit_harga_request';
$route['admin/harga_request.do/(:any)'] 	 = 'admin/delete_harga_request/$1';

//dashboard admin
$route['admin/dashboard']           		= 'C_admin/dashboard/index';

//master armada
$route['admin/jenis_armada'] 	            = 'admin/list_jenis_armada';
$route['admin/add_armada.do'] 	            = 'admin/add_list_armada/';
$route['admin/delete_armada.do/(:any)'] 	= 'admin/delete_armada/$1';
$route['admin/edit_armada.html/(:any)'] 	= 'admin/edit_armada/$1';
$route['admin/edit_armada.do/(:any)'] 	    = 'admin/proses_edit_armada/$1';

$route['admin/edit_customer/(:any)'] 	    = 'admin/form_edit_customer/$1';
$route['admin/edit_customer_go'] 	   		= 'admin/proses_edit_customer';


