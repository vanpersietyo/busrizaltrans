<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model("agen_model");
	}

// start login
    public function index()
	{
		$data = array(
			'template' => 'agen/login',
			'title'=>"Login"
		);
		$this->load->view('template/layout',$data);
	}

    public function proses_login()
	{
		//post / ambil data dari inputan login.
		$username 	= $this->input->post('username');
		$password 	= md5($this->input->post('password'));
		$var		= array(
						'username' => $username, 
						'password' => $password
					);
		//cek inputan di tabel user
		$result=$this->agen_model->cek_login($var,'user');
		if ($result->num_rows()==0) {//data tidak ditemukan
			//set notif
			$notif 	= $this->load->view('agen/notif',array('notif' =>'login_1'), TRUE);
			$this->session->set_flashdata("login", $notif);
			//redirect halaman login
			redirect('login.html');
		} else {
			//cek akun sudah aktif atau belum
			if ($result->row()->aktif==0) { //aktf = 0, belum aktifasi email
				//set notif
				$notif 	= $this->load->view('agen/notif',array('notif' =>'login_2','username'=>$username), TRUE);
				$this->session->set_flashdata("login", $notif);
				//redirect halaman login
				redirect('login.html');
			} else {
				//simpan ke array
				$session = array(
			        'username'  => $result->row()->username,
			        'email'  	=> $result->row()->email,
                    'kode_user' => $result->row()->kode_user,
                    'id_user' 	=> $result->row()->id_user,
                    'level'     => $result->row()->id_level,
                    'logged_in' => TRUE,
				);
				//set session
				$this->session->set_userdata($session);

				if($this->agen_model->cek_data(array('user' => $session['id_user']),'notifikasi')->num_rows()==0){
					$this->agen_model->insert_data('notifikasi',array(
						'menu' 		=> 'armada',
						'user' 		=> $session['id_user']
					));
				};

				//set notif
				$notif 	= $this->load->view('agen/notif',array('notif' =>'login_berhasil','username' =>$username), TRUE);
				$this->session->set_flashdata("login", $notif);
				//redirect home
				$data = array(
                    'template'      => 'home/home',
                    'title'         => 'Home',
                    'kota_awal'     => $this->agen_model->cek_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result(),
                    'kota_tujuan'   => $this->agen_model->cek_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')->result()
				);
				$this->load->view('template/layout',$data);		
			}
		}

	}
// end login


// start logout
    public function logout()
	{
		//delete session di tabel ci_sessions
		$this->agen_model->delete_sessions('id',$this->session->userdata("session_id"),'ci_sessions');
		//destroy session
		$this->session->sess_destroy();
		//redirect ke halaman login
		redirect('login.html');
	}
// end logout


// start register
	public function register()
	{
		$data = array(
			'template' => 'agen/register',
			'title'=>"Register"
		);
			$this->load->view('template/layout',$data);
	}


	public function proses_register()
	{
		//validasi inputan register
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|trim|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|trim|is_unique[user.email]');
        $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|numeric|trim|is_unique[user.telp]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|alpha_numeric|trim');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|trim');
       	//ambil inputan value register
		$nama		= $this->input->post('nama');
        $username	= $this->input->post('username');
        $telp 		= $this->input->post('telp');
        $email		= $this->input->post('email');
        $alamat		= $this->input->post('alamat');
		$password	= $this->input->post('password');
		$passconf	= $this->input->post('passconf');
		//cek validasi inputan register
        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {	
        	//munculkan notif error
			$notif 	= $this->load->view('agen/notif',array('notif' =>'register_1'), TRUE);
			$this->session->set_flashdata("register", $notif);
			//load kembali halaman register dengan isi value nya
			$data = array(
				'template' 	=> 'agen/register',
				'title'		=> "Register",
				'nama'		=> $nama,
				'username'	=> $username,
				'telp'		=> $telp,
				'email'		=> $email,
				'status'	=> 1,
				'alamat'	=> $alamat,
				'password'	=> $password,
				'passconf'	=> $passconf
			);
			$this->load->view('template/layout',$data);
        }
        else//jika inputan register sudah benar
        {	
        	$token= $this->generate_token($email,'Register');//request token ke fungsi generate
			//kirim email 
			$data = array(
				'to'				=> $email,
				'from'				=> 'support@buspariwisatasidoarjo.com',
				'from_nama'			=> 'Bus Pariwisata Sidoarjo', 
				'subject'			=> 'Pendaftaran Akun Baru Bus Pariwisata Sidoarjo | Rizal Trans', 
				'header_content'	=> '<h3>Aktivasi Akun</h3>', 
				'detail_content'	=> "<p>Klik <a href='".site_url('change.do/').$token."' target='_blank'>link ini</a> untuk aktivasi akun.</p>"
				);
			$result=$this->send_email($data);//kirim email dengan panggil funsi send_email

			if ($result==0) {//jika gagal kirim email
				//kirim notif gagal kirim email
				$notif 	= $this->load->view('agen/notif',array('notif' =>'register_email_gagal'), TRUE);
				$this->session->set_flashdata("register", $notif);
				//load ulang halaman register beserta inputan
				$data = array(
					'template' 	=> 'agen/register',
					'title'		=> "Register",
					'nama'		=> $nama,
					'username'	=> $username,
					'telp'		=> $telp,
					'email'		=> $email,
					'alamat'	=> $alamat,
					'password'	=> $password,
					'passconf'	=> $passconf
				);
				$this->load->view('template/layout',$data);
			} else{//jika berhasil kirim email
				//inisialisasi kolom tabel user yang akan di isi
				$input = array(
					'kode_user' => $this->agen_model->kode_auto('user','kode_user','USR'),
					'nama_lengkap'=> $nama,
					'username'	=> $username,
					'telp'		=> $telp,
					'email'		=> $email,
					'id_level'	=> 3,
					'status'	=> 1,
					'alamat'	=> $alamat,
					'password'	=> md5($password),
					'token'		=> session_id(),//kolom token di db diambil dari session_id
					'act_key'	=> $token,//nilai dari encrypt token
					'req_token'	=> 1,//status req token
					'aktif'		=> 0,//status belum aktif
					'add_by'	=> $username,
					'change_by'	=> $username
				);
				//insert data ke tabel user
				$this->agen_model->insert_data('user',$input);
				//set notif berhasil register
				$notif 	= $this->load->view('agen/notif',array('notif' =>'register_sukses'), TRUE);
				$this->session->set_flashdata("register", $notif);
				//redirect ke halaman register
				redirect('register.html');
			}
		}
	}


	public function aktivasi_register($username)
	{
	    $email=$this->agen_model->cek_data(array('username'=>$username),'user')->row()->email;

	    if($email===null){
            $email=$this->agen_model->cek_data(array('email'=>$username),'user')->row()->email;
        }

        $token= $this->generate_token($email,'Register');//request token ke fungsi generate
        //kirim email
        $data = array(
            'to'				=> $email,
            'from'				=> 'support@buspariwisatasidoarjo.com',
            'from_nama'			=> 'Bus Pariwisata Sidoarjo',
            'subject'			=> 'Pendaftaran Akun Baru Bus Pariwisata Sidoarjo | Rizal Trans',
            'header_content'	=> '<h3>Aktivasi Akun</h3>',
            'detail_content'	=> "<p>Klik <a href='".site_url('change.do/').$token."' target='_blank'>link ini</a> untuk aktivasi akun.</p>"
        );
        $this->send_email($data);//kirim email dengan panggil funsi send_email

        $input = array(
            'username'	=> $username,
            'token'		=> session_id(),//kolom token di db diambil dari session_id
            'act_key'	=> $token,//nilai dari encrypt token
            'req_token'	=> 1,//status req token
        );
        //insert data ke tabel user
        $this->agen_model->update_data('username',$username,'user',$input);

        $notif 	= $this->load->view('agen/notif',array('notif' =>'register_sukses'), TRUE);
        $this->session->set_flashdata("login", $notif);
        //redirect ke halaman register
        redirect('login.html');
	}
//end register

//start send email
    public function send_email($data)
	{	
		//load library email
		$this->load->library('Email');
		//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://rizaltrans.adhityaelenwedding.com',
		    'smtp_port' =>  465,
		    'smtp_user' => 'admin@rizaltrans.adhityaelenwedding.com',
		    'smtp_pass' => 'rizaltrans',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		//Email content
		$htmlContent 	= $data['header_content'];
		$htmlContent   .= $data['detail_content'];
		//tujuan email
		$this->email->to($data['to']);
		$this->email->from($data['from'],$data['from_nama']);
		$this->email->subject($data['subject']);
		$this->email->message($htmlContent);
		//Send email
		if($this->email->send()) {
	    	return '1';
	    }
	    else {
	    	return '0';
	    }
	}

// end send email


// start forgot password
	public function forgotpassword()
	{
		$data = array(
			'template' => 'agen/forgot-password',
			'title'=>"Forgot Password"
		);
			$this->load->view('template/layout',$data);
			
	}

	public function proses_forgotpassword()
	{
		//tangkap inputan email
		$email=$this->input->post("email");
		//cari email di tabel user
		$result=$this->agen_model->cek_data(array('email' =>$email),'user')->num_rows();
		if ($result==0) {
			//set notif
			$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_1'), TRUE);
			$this->session->set_flashdata("forgot_password", $notif);
			redirect('forgot_password.html');
		} else {
			$token= $this->generate_token($email,'LupaPassword');
			$data = array(
				'to'				=> $email,
				'from'				=> 'support@buspariwisatasidoarjo.com',
				'from_nama'			=> 'Bus Pariwisata Sidoarjo', 
				'subject'			=> 'Lupa Password Akun Bus Pariwisata Sidoarjo | Rizal Trans', 
				'header_content'	=> '<h3>Lupa Password</h3>', 
				'detail_content'	=> "<p>Klik <a href='".site_url('change.do/').$token."' target='_blank'>link ini</a> untuk Reset Password.</p>"
				);
			$this->send_email($data);
			$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_2'), TRUE);
			$this->session->set_flashdata("forgot_password", $notif);
			redirect('forgot_password.html');
		}			
	}

	public function update_forgot_password($data)
	{
		$decode 	= explode("|",base64_decode($data.'='));
		if (sizeof($decode)>=4) {
			$query		= array('email' => $decode[0],'token' => $decode[3] );//,'act_key' => $data);
			$result		= $this->agen_model->cek_data($query,'user')->num_rows();
			$action		= $decode[2];
		}else{
			//jika link di acak2 jadi error, tidak sesuai
			$result=0;
			$action=0;
		}

		if ($action=='LupaPassword') {
			# jika action=lupa password
			if ($result==0) {
				//jika link di acak2 jadi error, tidak sesuai
				$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_3'), TRUE);
				$this->session->set_flashdata("forgot_password", $notif);
				redirect('forgot_password.html');
			} else {		
				//jika status req token nya 0
				$req_token= $this->agen_model->cek_data(array('email' => $decode[0] ),'user')->row()->req_token;
				if ($req_token==0) {
					$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_3'), TRUE);
					$this->session->set_flashdata("forgot_password", $notif);
					redirect('forgot_password.html');
				}
				$data = array(
					'template' 	=> 'agen/change_password',
					'title'		=> "Change Password",
					'token'		=> $data
				);
				$this->load->view('template/layout',$data);
			}
		}  elseif ($action=='Register') {
			# jika action=lupa password
			if ($result==0) {
				//jika link di acak2 jadi error, tidak sesuai
				$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_3'), TRUE);
				$this->session->set_flashdata("login", $notif);
				redirect('login.html');
			} else {		
				//jika status req token nya 0
				$req_token= $this->agen_model->cek_data(array('email' => $decode[0] ),'user')->row()->req_token;
				if ($req_token==0) {
					$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_3'), TRUE);
					$this->session->set_flashdata("login", $notif);
					redirect('login.html');
				}
				$id 	= $this->agen_model->cek_data(array('email' => $decode[0] ),'user')->row()->kode_user;
				$this->agen_model->update_data('kode_user',$id,'user',array('aktif' =>'1','req_token'=>0,'act_key'=>null,'token'=>null));
				$notif 	= $this->load->view('agen/notif',array('notif' =>'activate_register_sukses'), TRUE);
				$this->session->set_flashdata("login", $notif);
				$this->load->view('agen/aktivasi_sukses');
			}

		} 	else {				
			//jika link di acak2 jadi error, tidak sesuai
			$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_3'), TRUE);
			$this->session->set_flashdata("login", $notif);
			redirect('login.html');
		}

	}

// end forgot password

// start confirm password
	public function change_password(){

 		$this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $token= $this->input->post("token");
        $password= $this->input->post("password");
        if ($this->form_validation->run() == FALSE)
        {
			$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_4'), TRUE);
			$this->session->set_flashdata("forgot_password", $notif);
            redirect(site_url('change.do/'.$token));
        }
        else
        {		
        	$decode = explode("|",base64_decode($token));
			if (sizeof($decode)>=4) {
				$email	= $decode[0];
				$id 	= $this->agen_model->cek_data(array('email' => $email ),'user')->row()->kode_user;
	    		$this->agen_model->update_data('kode_user',$id,'user',array('req_token'=>0,'password' => md5($password),'act_key'=>null,'token'=>null ));
				$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_5'), TRUE);
				$this->session->set_flashdata("login", $notif);
	            redirect('login.html');	
			} else {
				$notif 	= $this->load->view('agen/notif',array('notif' =>'forgot_password_4'), TRUE);
				$this->session->set_flashdata("forgot_password", $notif);
	            redirect(site_url('change.do/'.$token));
			}


        }
		$data = array(
			'template' => 'agen/change_password',
			'title'=>"Change Password"
		);
			$this->load->view('template/layout',$data);
	}
// end confirm password

	public function generate_token($email,$action){
		$sessionid 	= session_id();
		$encrypt 	= str_replace('=', '',base64_encode($email.'|'.time().'|'.$action.'|'.$sessionid));

		if ($action=='Register') {
			return $encrypt;
		} elseif ($action=='LupaPassword') {
			$id 		= $this->agen_model->cek_data(array('email' => $email ),'user')->row()->kode_user;
			$update 	= array('token' 	=> $sessionid,
								'act_key'	=> $encrypt,
								'req_token'	=> 1
								);
			$this->agen_model->update_data('kode_user',$id,'user',$update);
			return $encrypt;
		}
		
	}

    public function userprofile()
    {
        $data = array(
            'template'  => 'agen/akun/user-profile',
            'title'     => "Account Profile",
            'data'      => $this->agen_model->cek_data(array('username'=>$this->session->userdata('username')),'user')->row(),
        );
        $this->load->view('template/layout',$data);
    }

    public function loyalti_point()
    {
        $data = array(
            'template' => 'agen/akun/loyaltypoint',
            'title'=>"Account Profile"
        );
        $this->load->view('template/layout',$data);
    }

    public function data_booking()
    {
        $data = array(
            'template' => 'agen/akun/list-booking',
            'title'=>"List Booking"
        );
        $this->load->view('template/layout',$data);
    }

    public function messages()
    {
        $data = array(
            'template' => 'agen/akun/message',
            'title'=>"Account Profile"
        );
        $this->load->view('template/layout',$data);
    }

    public function bookingdetail()
    {
        $data = array(
            'template' => 'agen/akun/bus_booking_detail',
            'title'=>"Booking Detail"
        );
        $this->load->view('template/layout',$data);
    }

    public function paymentconfirm()
    {
        $data = array(
            'template' => 'agen/akun/PaymenConfirm',
            'title'=>"Konfirmasi Pembayaran"
        );
        $this->load->view('template/layout',$data);
    }

    public function tes_email(){
        $data = array(
            'to'				=> 'barcelonitas.adhyt@gmail.com',
            'from'				=> 'support@buspariwisatasidoarjo.com',
            'from_nama'			=> 'Bus Pariwisata Sidoarjo',
            'subject'			=> 'tes email',
            'header_content'	=> '<h3>tes email</h3>',
            'detail_content'	=> "<p>tes email.</p>"
        );
        echo $this->my_email->send_email($data);
    }

    public function php_info(){
		$this->load->view('tes');
    }



}

/* End of file Agen.php */


