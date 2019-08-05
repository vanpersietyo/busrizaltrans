<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 25/11/2018
 * Time: 9:59
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader {

	public function __construct()
	{
		$this->CI =& get_instance();
		date_default_timezone_set("Asia/Bangkok");
	}

	function do_upload_img($file)
	{
		$config['upload_path'] 		= realpath(APPPATH . '../assets/images/rizaltrans/upload');
		$config['allowed_types'] 	= 'jpg|jpeg|gif|png';
		$config['max_size']  		= '99999999999';
		$config['file_name']	 	= $file;

		$this->CI->load->library('upload', $config);
		if ( ! $this->CI->upload->do_upload()){
			$data=array(
				'status' 	=> false,
				'messages'	=> $this->CI->upload->display_errors()
			);
		}
		else{
			$data=array(
				'status' 	=> true,
				'messages'	=> site_url('assets/images/rizaltrans/upload/'.$this->CI->upload->file_name)
			);
		}
		return $data;
	}

}
?>
