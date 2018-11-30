<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl extends CI_Controller {

  public function __construct()
    {
    // created the construct so that the helpers, libraries, models can be loaded all through this controller
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('xmlrpc');
    $this->load->library('xmlrpcs');
        $this->refcode = $this->session->userdata('refcode');
    }

  public function index()
    {
          // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, "https://www.google.co.id/");

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    echo $output;
    }
  }