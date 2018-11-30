<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

    public function index()
    {
        $this->load->model('admin_model');

        $data = array(
			'template'      => 'bus/search',
			'title'         =>"Reservasi Bus",
            'kota_awal'     => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result(),
            'kota_tujuan'   => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')->result()
		);
		$this->load->view('template/layout',$data);
    }   

    public function schedule()
    {
        $this->load->model('admin_model');
        $this->load->model('Bus_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('departure', 'Kota Penjemputan', 'trim|required');
        $this->form_validation->set_rules('arrival', 'Kota Tujuan', 'trim|required');
        $this->form_validation->set_rules('date_departure', 'Tanggal berangkat', 'trim|required');

        $departure        =$this->input->POST('departure');
        $arrival          =$this->input->POST('arrival');
        $date_departure   =$this->input->POST('date_departure');
        if ($this->form_validation->run() == FALSE) {
            redirect('bus');
        } else {
            $schedule   = $this->Bus_model->get_shcedule('daftar_harga','armada',array('id_kota_awal'=>$departure,'id_kota_tujuan'=>$arrival,'tipe_harga'=>0,'status_harga'=>1))->result();
            // $armada     = $this->Bus_model->get_all_armada('armada');
            // print_r($armada);
            // die;
            // var_dump($schedule);
            // die;
            $fasilitas  = $this->Bus_model->get_fasilitas_armada('armada','fasilitas_armada','fasilitas',array('status_armada'=>1))->result();
            $data = array(
                'template'      => 'bus/schedule',
                'title'         => 'Schedule Bus',
                // 'armada'        => $armada,
                'fasilitas'     => $fasilitas,
                'schedule'      => $schedule,
                'date_departure'=> $date_departure
            );
            $this->load->view('template/layout',$data);
        }
    }
    public function passanger(){
        $data = array(
            'template'      => 'bus/passanger',
            'title'         => 'Reservasi Bus'
        );
        $this->load->view('template/layout',$data);
    }
    public function confirm_book(){
        $data = array(
            'template'      => 'bus/confirm_book',
            'title'         => 'Reservasi Bus'
        );
        $this->load->view('template/layout',$data);
    }
    public function booking(){
        $data = array(
            'template'      => 'bus/booking',
            'title'         => 'Reservasi Bus'
        );
        $this->load->view('template/layout',$data);
    }
    public function print_invoice(){
        $this->load->view('agen/report/print_invoice');
    }

}

/* End of file Bus.php */
