<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Start of file admin/Booking.php */
class Booking extends CI_Controller {

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
            'title'         => "Dashboard Booking",
            'menu'          => 'Booking'
        );
        $this->load->view('templateAdmin/layout',$data);
    }

    public function add_booking()
    {
        $data = array(
            'templateAdmin'=> 'admin/booking/add_booking',
            'title'        => "Add Booking",
            'menu'         => 'Add Booking',
            'pemesan'      => $this->admin_model->filter_data(array('status_customer'=>1),'customer'),
			'armada'       => $this->admin_model->filter_data(array('status_armada'=>1),'armada'),
			'kota_awal'    => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1),'kota'),
			'kota_tujuan'  => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1),'kota'),
			'tipe'		   => '1'//tipe 1 = harga request
        );
        $this->load->view('templateAdmin/layout',$data);
    }

    public function add_booking_paket()//add_booking_paket
    {
        $data = array(
            'templateAdmin' => 'admin/booking/add_booking_paket',
            'title'         => "Add Booking",
            'menu'          => 'Add Booking',
			'pemesan'      	=> $this->admin_model->filter_data(array('status_customer'=>1),'customer'),
            'armada'        => $this->admin_model->select_data('armada'),
            'kota_awal'     => $this->admin_model->select_data('kota_awal'),
            'kota_tujuan'   => $this->admin_model->select_data('kota_tujuan')
        );
        $this->load->view('templateAdmin/layout',$data);

    }

    public function proses_add_booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kota_tujuan', 'Kota Tujuan', 'trim|required|differs[kota_awal]');
//        $this->form_validation->set_rules('kode_pesanan', 'Pesanan Dengan Kode Tersebut', 'trim|required|is_unique[pesanan.kode_pesanan]');
        $this->form_validation->set_rules('durasi', 'Hari', 'trim|required|greater_than[0]');

        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
            $notif 	= $this->load->view('admin/booking/notif_booking',array('notif' =>'add_booking_gagal'), TRUE);
            echo $notif;
        } else {

//        	insert atau replace customer
			$data = array(
				'nama_customer'			=> $this->input->post("nama_customer"),
				'alamat_customer'		=> $this->input->post("alamat_customer"),
				'telepon_customer'		=> $this->input->post("telepon_customer"),
				'keterangan_customer'	=> $this->input->post("keterangan_customer"),
				'status_customer'		=> 1
			);
			$kode = $this->input->post("kode_customer");
            //cari data dengan kode customer inputan
            if ($kode==0){
				$customer=$this->admin_model->cek_data($data,'customer');
				if($customer->num_rows()==0){
					$kode = $this->admin_model->kode_auto('customer','id_customer','CUST');
					$data['kode_customer'] = $kode;
					$this->admin_model->insert_data('customer',$data);
					$id_cust = $this->admin_model->cek_data(array('kode_customer'=>$data['kode_customer']),'customer')->row()->id_customer;
				} else{
					$kode 		= $customer->row()->kode_customer;
					$id_cust 	= $customer->row()->id_customer;
				};
            } else {
				$id_cust = $this->admin_model->cek_data(array('kode_customer'=>$kode),'customer')->row()->id_customer;
			}
//			end replace customer

			$id_armada			= $this->input->post("id_armada");
            $id_kota_awal		= $this->input->post("kota_awal");
			$id_kota_tujuan		= $this->input->post("kota_tujuan");
            $durasi		= $this->input->post("durasi");
			$harga	 	= str_replace(',','',$this->input->post("tagihan"));
			$potongan	= str_replace(',','',$this->input->post("potongan"));
			$pajak		= (($harga*$durasi)-$potongan)*10/100;
			$total		= (($harga*$durasi)-$potongan)+$pajak;
			$pembayaran = $this->input->post("status_pembayaran");

			$tanggal_awal=date_format(date_create($this->input->post("tanggal_awal")),"Y/m/d");
			$tanggal_akhir=date_format(date_create($this->input->post("tanggal_akhir")),"Y/m/d");

//			cek harga, jika tidak ada, tambah daftar harga nya
			$cek_harga = array(
				'id_armada'		=>$id_armada,
				'tipe_harga'	=> 1,
				'id_kota_awal'	=> $id_kota_awal,
				'id_kota_tujuan'=> $id_kota_tujuan,
			);
			$price	= $this->admin_model->cek_data($cek_harga,'daftar_harga');
			if($price->num_rows()==0){
				$cek_harga['kode_harga']	= $this->admin_model->kode_auto('daftar_harga','kode_harga','HRGR');
				$cek_harga['harga']			= $harga;
				$cek_harga['durasi']		= $durasi;
				$cek_harga['potongan_harga']= $potongan;
				$cek_harga['status_harga']	= 1;
				$cek_harga['add_by']		= $this->session->userdata('username');
				$cek_harga['nama_harga']	= $this->admin_model->cek_data(array('id_kota'=>$id_kota_awal,'status_kota'=>1),'kota')->row()->nama_kota.' '.$this->admin_model->cek_data(array('id_kota'=>$id_kota_tujuan,'status_kota'=>1),'kota')->row()->nama_kota;
				$this->admin_model->insert_data('daftar_harga',$cek_harga);
				$id_harga=$this->admin_model->cek_data(array('kode_harga' => $cek_harga['kode_harga']),'daftar_harga')->row()->id_harga;
			} else {
				$id_harga=$price->row()->id_harga;
			};
//			end cek harga

			if ($pembayaran==1){ // belum bayar
				$metode_pembayaran 	= "Belum Bayar";//
				$status_pemesanan	= 1;
				$sisa_tagihan		= $total;
			} elseif ($pembayaran==2){ //
				$metode_pembayaran 	= "DP 25%";
				$status_pemesanan	= 2;//"DP 25%";
				$sisa_tagihan		= $total-($total*25/100);
			} else{
				$metode_pembayaran 	= "Lunas";
				$status_pemesanan	= 3;
				$sisa_tagihan		= 0;
			}
            $pesanan = array(
            	'id_armada'			=> $id_armada,
            	'id_kota_awal'		=> $id_kota_awal,
            	'id_kota_tujuan'	=> $id_kota_tujuan,
            	'id_customer'		=> $id_cust,
            	'id_harga'			=> $id_harga,
				'tanggal_pesanan'	=> date('Y-m-d h:i:s'),
            	'tanggal_awal'		=> $tanggal_awal,
            	'tanggal_akhir'		=> $tanggal_akhir,
            	'jenis_pesanan'		=> 1,//1=request || 0 = paket
            	'durasi'			=> $durasi,
            	'harga'				=> $harga,
            	'potongan'			=> $potongan,
            	'pajak'				=> $pajak,
				'keterangan'		=> $this->input->post("keterangan_booking"),
				'metode_pembayaran'	=> $metode_pembayaran,
				'status_pemesanan'	=> $status_pemesanan,
				'nominal_pembayaran'=> str_replace(',','',$this->input->post("nominal_pembayaran")),
				'add_by'			=> $this->session->userdata('username'),
				'total'				=> $total,
				'sisa'				=> $sisa_tagihan,
				'kode_pesanan'		=> $this->admin_model->kode_auto_pesanan(),
				'kode_booking'		=> $this->admin_model->kode_booking(),
			);
			$this->admin_model->insert_data('pesanan',$pesanan);
			$notif 	= $this->load->view('admin/booking/notif_booking',
				array('notif' =>'add_booking_sukses','kode_pesanan'=>$pesanan['kode_pesanan']), TRUE);
			echo $notif;
		}
    }


    public  function cari_harga($tipe)
    {
		$data	= array(
			'id_armada'		=> $this->input->post('id_armada'),
			'id_kota_awal'	=> $this->input->post('kota_awal'),
			'id_kota_tujuan'=> $this->input->post('kota_tujuan'),
			'tipe_harga'	=> $tipe,
			'status_harga'	=> 1
		);
		$harga = $this->admin_model->filter_data($data,'daftar_harga');
		if ($harga->num_rows()==0){
			echo 0;
		}else{
			echo number_format($harga->row()->harga);
		}
    }

    public  function hitung_hari_dari_2_tanggal()
    {
        $date   = $this->input->post('tanggal_akhir');//"14/10/2018";
        $date2  = $this->input->post('tanggal_awal');//"12/10/2018";

        $pecah  =explode('/',$date);
        $tanggal= $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
        $date   = date_create($tanggal);
        $date   = date_format($date,'Y-m-d');

        $pecah2  =explode('/',$date2);
        $tanggal2= $pecah2[2].'-'.$pecah2[1].'-'.$pecah2[0];
        $date2   = date_create($tanggal2);
        $date2   = date_format($date2,'Y-m-d');

        $time = strtotime($date);
        $time2 = strtotime($date2);

        if ($time<$time2){
            echo 0 ;
        } else {
            $hasil=$time-$time2;
           echo round($hasil / (60 * 60 * 24) + 1);
//            $newformat = date('d',$hasil);
//            echo round($newformat);
        }
    }

    public function convert_tanggal($date) //convert DD/MM/YYYY jadi YYYY/MM/DD
    {
        $pecah  =explode('/',$date);
        $tanggal= $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
        $date   = date_create($tanggal);
        $date   = date_format($date,'Y-m-d');
        return $date;
    }

    public function list_pesanan(){
		$data = array(
			'templateAdmin'=> 'admin/booking/list_booking',
			'title'        => "List Booking",
			'menu'         => 'List Booking',
			'pemesan'      => $this->admin_model->filter_data(array('status_customer'=>1),'customer'),
			'armada'       => $this->admin_model->filter_data(array('status_armada'=>1),'armada'),
			'kota_awal'    => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1),'kota'),
			'kota_tujuan'  => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1),'kota'),
			'tipe'		   => '1'//tipe 1 = harga request
		);
		$this->load->view('templateAdmin/layout',$data);
	}

	public function kode_booking()
	{
		echo $this->admin_model->kode_booking();
	}
}

/* End of file admin/Booking.php */

