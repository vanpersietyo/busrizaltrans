<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

// start login
    public function send()
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
		$htmlContent = '<h3>Aktivasi Pendaftaran Akun Bus Pariwisata Sidoarjo</h3>';
		$htmlContent .= '<p>Terima Kasih Sudah Melakukan Pendaftaran. Klik link ini untuk melakukan aktivasi.</p>';
		//tujuan email
		$this->email->to('barcelonitas.adhyt@gmail.com');
		$this->email->from('support@buspariwisatasidoarjo.com','Bus Pariwisata Sidoarjo');
		$this->email->subject('Aktivasi Akun Bus Pariwisata Sidoarjo | Rizal Trans');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}


	public function send_params($data)
	{
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
		$htmlContent 	= $data["header_content"];
		$htmlContent   .= $data["detail_content"];

		$this->email->to($data["to"]);
		$this->email->from($data["from"],$data["nama"]);
		$this->email->subject($data["subject"]);
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}
}

/* End of file Agen.php */