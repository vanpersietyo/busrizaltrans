<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');

		$data = array(
			'template'      => 'bus/search',
			'title'         => "Reservasi Bus",
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
			$fasilitas  = $this->Bus_model->get_fasilitas_armada('armada','fasilitas_armada','fasilitas',array('status_armada'=>1))->result();
			$checkbus	= $this->Bus_model->check_bus('pesanan',array('tanggal_akhir <' => $date_departure, 'status_pemesanan' => 1));
			$data = array(
				'template'      => 'bus/schedule',
				'title'         => 'Schedule Bus',
				'fasilitas'     => $fasilitas,
				'schedule'      => $schedule,
				'date_departure'=> $date_departure,
				'departure'		=> $departure,
				'arrival'		=> $arrival,
				'available'		=> $checkbus
			);
			$this->load->view('template/layout',$data);

		}
	}
	public function passanger(){
		$this->load->model('Bus_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('datedeparture', 'Tanggal keberangkatan', 'trim|required');
		$this->form_validation->set_rules('departure', 'Kota berangkat', 'trim|required');
		$this->form_validation->set_rules('arrival', 'Kota Tujuan', 'trim|required');
		$this->form_validation->set_rules('priceArmada', 'Pricelist', 'trim|required');

		$datedeparture	= $this->input->POST('datedeparture');
		$departure		= $this->input->POST('departure');
		$arrival		= $this->input->POST('arrival');
		$priceCode	= $this->input->POST('priceArmada');

		if ($this->form_validation->run() == TRUE or FALSE) {
			$id_armada  = $this->Bus_model->get_detail_armada('daftar_harga',array('kode_harga'=>$priceCode));
			if ($id_armada->num_rows()>0) {


				$data	    = array(
					'title'         => 'Reservasi Bus',
					'template'      => 'bus/passanger',
					'id_armada'     => $id_armada->row()->id_armada,
					'datedeparture'	=> $datedeparture,
					'departure'		=> $departure,
					'arrival'		=> $arrival,
					'priceArmada'	=> $priceCode
				);
				$this->load->view('template/layout',$data);
			} else {
				redirect('bus','refresh');
			}
		} else {
			redirect('bus',refresh);
		}

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
	public function tes(){
		$this->load->view('tes');

	}

}

/* End of file Bus.php */
