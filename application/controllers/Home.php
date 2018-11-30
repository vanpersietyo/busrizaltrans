<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	// $this->load->view('template/layout');
    $this->load->model('admin_model');
	$data = array(
		'template'      => 'home/home',
		'title'         => 'Home',
        'kota_awal'     => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result(),
        'kota_tujuan'   => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')->result()
	);
		$this->load->view('template/layout',$data);
	}
	
	public function contact()
	{
	// $this->load->view('template/layout');
	$data = array(
		'template' => 'home/contact'
	);
		$this->load->view('template/layout',$data);
	}

	public function profile()
	{
		$data = array(
			'template' 	=> 'home/profile',
			'title' 	=> 'Profile'
		);
		$this->load->view('template/layout',$data);
	}

	public function armadabus()
    {
        $this->load->model('bus_model');
        $list_armada= $this->bus_model->get_all_armada('armada')->result();
        $data=array(
            'armada'    => $list_armada,
            'template'  => 'home/armadabus',
            'title'     => 'Armada Bus'
        );
        $this->load->view('template/layout',$data);
    }

    public function armadabus_detail($id){
        $this->load->model('bus_model');
        $detail_armada= $this->bus_model->get_detail_armada('armada',array('id_armada'=>$id));
        $fasilitas_armada= $this->bus_model->get_fasilitas_armada('armada','fasilitas','fasilitas_armada',array('armada.id_armada'=>$id))->result();

        if ($detail_armada->num_rows()>=0){
            $data=array(
                'template'          => 'home/armadabus_detail',
                'title'             => 'Armada Bus',
                'id_armada'         => $detail_armada->row()->id_armada,
                'nama_armada'       => $detail_armada->row()->nama_armada,
                'kapasitas_armada'  => $detail_armada->row()->kapasitas_armada,
                'keterangan_armada' => $detail_armada->row()->keterangan_armada,
                'foto_armada'       => $detail_armada->row()->foto_armada,
                'status_armada'     => $detail_armada->row()->status_armada,
                'fasilitas'         => $fasilitas_armada
            );
            $this->load->view('template/layout',$data);

        }else{
            redirect('show_error');
        }

	}

    public function newsletter(){
        $this->load->model("agen_model");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[newsletter.email]');

        //cek validasi inputan register
        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
            $this->load->view('home/notif',array('notif' =>'verifikasi_newsletter_gagal'));
        } else {
            $email      = $this->input->post('email');
            $this->agen_model->insert_data('newsletter',array('email'=>$email,'status'=>1));
            $data = array(
                'to'				=> $email,
                'from'				=> 'support@buspariwisatasidoarjo.com',
                'from_nama'			=> 'Bus Pariwisata Sidoarjo',
                'subject'			=> 'PROMO BUS RIZAL TRANS',
                'header_content'	=> '<h3>Terima Kasih Sudah Berlangganan Newsletter Kami</h3>',
                'detail_content'	=> "<p>Email Ini akan berisi promo terbaru</p>"
            );
            if($this->my_email->send_email($data)=='1'){
                $this->load->view('home/notif',array('notif' =>'newsletter_sukses'));
            } else {
                $this->load->view('home/notif',array('notif' =>'newsletter_gagail_kirim'));
            };
        }

    }

    public function request_tour()
    {
        $data = array(
            'template' 	=> 'home/requesttour',
            'title' 	=> 'Request Tour'
        );
        $this->load->view('template/layout',$data);
    }

    private static function tes(){
		echo "tes";
	}
}
