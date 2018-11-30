<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 22/10/2018
 * Time: 21:30
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Start of file admin/Booking.php */
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('level')!='1'){
            //set notif
            $notif 	= $this->load->view('agen/notif',array('notif' =>'not_authorize'), TRUE);
            $this->session->set_flashdata("login", $notif);
            //redirect halaman login
            redirect('login.html');
        }
        $this->load->model("admin_model");
        date_default_timezone_set('asia/jakarta');
    }

    public function index()
    {
        $data = array(
            'templateAdmin' => 'admin/booking/index',
            'title'         => "Dashboard",
            'menu'          => 'Dashboard'
        );
        $this->load->view('templateAdmin/layout',$data);

    }

    public function form()
    {
        $data = array(
            'templateAdmin' => 'admin/booking/form',
            'title'         => "Dashboard Booking",
            'menu'          => 'Booking'
        );
        $this->load->view('templateAdmin/layout',$data);

    }



}

/* End of file admin/Booking.php */


