<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->library('form_validation');
		date_default_timezone_set("Asia/Bangkok");
    }

//----------------------------------------START DASHBOARD------------------------------------------//
    public function index()
    {
        $data = array(
            'templateAdmin' => 'admin/dashboard',
            'title'         => "Dashboard Admin",
            'menu'          => "Dashboard"
        );
        $this->load->view('templateAdmin/layout',$data);
    }
//----------------------------------------END DASHBOARD------------------------------------------//

//----------------------------------------START KOTA------------------------------------------//

//start list kota => kota_penjemputan.html or kota_tujuan.html

    public function list_kota($kota) //$kota di isi 'Penjemputan' / 'Tujuan'
    {
        if ($kota=='Penjemputan'){
            $data = array(
                'templateAdmin'     => 'admin/kota/list_kota',
                'title'             => "Daftar Kota ".$kota,
                'jenis_kota'        => $kota,
                'menu'              => "Kota",
                'submenu'           => $kota,
                'kode_kota'         => $this->admin_model->kode_auto_kota('kota','kode_kota','KTA','0'),
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result()
            );
            $this->load->view('templateAdmin/layout',$data);
        } elseif ($kota=='Tujuan'){
            $data = array(
                'templateAdmin'     => 'admin/kota/list_kota',
                'title'             => "Daftar Kota ".$kota,
                'jenis_kota'        => $kota,
                'menu'              => "Kota",
                'submenu'           => $kota,
                'kode_kota'         => $this->admin_model->kode_auto_kota('kota','kode_kota','KTJ','1'),
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')
            );
            $this->load->view('templateAdmin/layout',$data);
            }
        else{
            show_404();
        }
    }

    public function list_kota_ajax($kota) //$kota di isi 'Penjemputan' / 'Tujuan'
    {
        if ($kota=='Penjemputan'){
            $data = array(
                'templateAdmin'     => 'admin/kota/list_kota',
                'title'             => "Daftar Kota ".$kota,
                'jenis_kota'        => $kota,
                'menu'              => "Kota ".$kota,
                'kode_kota'         => $this->admin_model->kode_auto_kota('kota','kode_kota','KTA','0'),
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result()
            );
            $this->load->view('admin/kota/list_kota_ajax',$data);
        } elseif ($kota=='Tujuan'){
            $data = array(
                'templateAdmin'     => 'admin/kota/list_kota',
                'title'             => "Daftar Kota ".$kota,
                'jenis_kota'        => $kota,
                'menu'              => "Kota ".$kota,
                'kode_kota'         => $this->admin_model->kode_auto_kota('kota','kode_kota','KTJ','1'),
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')
            );
            $this->load->view('admin/kota/list_kota_ajax',$data);
            }
        else{
            show_404();
        }
    }

    public function tabel_list_kota($jenis){
        //jenis = Penjemputan dan Tujuan
        if ($jenis=='Penjemputan'){
            $data = array(
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>0,'status_kota'=>1),'kota')->result(),
                'jenis_kota'        => $jenis,
            );
            $this->load->view('admin/kota/tabel_list_kota',$data);
        }else{
            $data = array(
                'list_kota'         => $this->admin_model->cek_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')->result(),
                'jenis_kota'        => $jenis,
            );
            $this->load->view('admin/kota/tabel_list_kota',$data);
        };

    }

    public function add_kota($jenis){
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        //jenis = Penjemputan dan Tujuan
        if ($jenis=='Penjemputan'){
            $jenis_kota=0;
        }else{
            $jenis_kota=1;
        };
        $where  = array('jenis_kota'=>$jenis_kota,'nama_kota'=>$nama,'status_kota'=>1);//cek data di database apakah ada nama kota yang sama dalam 1 jenis
        $exist  = $this->admin_model->cek_data($where,'kota');
        $kode   = $this->admin_model->kode_auto_kota('kota','kode_kota','KTJ',$jenis_kota);

        if ($exist->num_rows()==0){//tidak ada yang sama, bisa lanjut input
            //ubah data ke bentuk array untuk di upload ke db
            $data       = array(
                'kode_kota'         =>$kode,
                'nama_kota'         =>ucfirst($nama),
                'keterangan_kota'   =>$keterangan,
                'status_kota'       =>1,
                'jenis_kota'        =>$jenis_kota,
                'add_by'            =>$this->session->userdata('username'),
                'change_by'         =>$this->session->userdata('username'),
            );
            $this->admin_model->insert_data('kota',$data);
            //kirim parameter notif berhasil
            $data       = array(
                'notif' =>'tambah_kota_sukses',
                'kode'  =>$kode,
                'nama'  =>$nama,
            );
            //load tampilan notif
            $this->load->view('admin/kota/notif',$data);

        } else { // nama kota yang di inputkan sudah ada, tampilkan pesan error
            //kirim parameter notif salah
            $data       = array(
                'notif' =>'nama_kota_sudah_ada',
                'nama'  =>$nama,
            );
            //load tampilan notif
            $this->load->view('admin/kota/notif',$data);

        }
//        echo $data['kode'];
    }

    public function delete_kota($id){
//        $this->admin_model->delete_data('id_kota',$id,'kota');

        $this->admin_model->update_data('id_kota',$id,'kota',array('status_kota'=>0));
        //kirim parameter notif
        $data       = array(
            'notif' =>'hapus_kota_berhasil',
        );
        //load tampilan notif
        $this->load->view('admin/kota/notif',$data);
    }

    public function edit_kota($id_kota){
        $kota = $this->admin_model->cek_data(array('id_kota'=>$id_kota),'kota');

        if ($kota->num_rows()!=0){
            $data   = array(
                'kota'=>$kota->row(),
            );
            $this->load->view('admin/kota/edit_kota_ajax',$data);
        }

        }

    public function proses_edit_kota(){
        $kode_kota          = $this->input->post('kode_kota');
        $nama_kota          = $this->input->post('nama_kota');
        $keterangan_kota    = $this->input->post('keterangan_kota');
        $id_kota            = $this->input->post('id_kota');
        $jenis_kota         = $this->input->post('jenis_kota');
//        echo "$id_kota , $kode_kota , $nama_kota , $jenis_kota, $keterangan_kota";
        //kirim parameter notif salah
//        $this->db->where();
        $where  = array('id_kota !='=> $id_kota,'jenis_kota'=>$jenis_kota,'nama_kota'=>$nama_kota,'status_kota'=>1);//cek data di database apakah ada nama kota yang sama dalam 1 jenis
        $exist  = $this->admin_model->cek_data($where,'kota');

        if ($exist->num_rows()==0){//tidak ada yang sama, bisa lanjut input
            //ubah data ke bentuk array untuk di upload ke db
            $data       = array(
                'nama_kota'         =>ucfirst($nama_kota),
                'keterangan_kota'   =>$keterangan_kota,
                'change_by'         =>$this->session->userdata('username'),
            );
            $this->admin_model->update_data('id_kota',$id_kota,'kota',$data);
            $data       = array(
                'notif' =>'update_kota_berhasil'
            );
            //load tampilan notif
            $this->load->view('admin/kota/notif',$data);
        } else { // nama kota yang di inputkan sudah ada, tampilkan pesan error
            $data       = array(
                'notif' =>'update_kota_gagal'
            );
            //load tampilan notif
            $this->load->view('admin/kota/notif',$data);

        }
    }
//----------------------------------------END KOTA------------------------------------------//

//----------------------------------------START FASILITAS------------------------------------------//

//start list Fasilitas => list_fasilitas.html
    public function list_fasilitas()
    {
        $data = array(
            'templateAdmin' => 'admin/fasilitas/list_fasilitas',
            'title'         => "Daftar Fasilitas",
            'menu'          => 'Fasilitas',
            'list_fasilitas'=> $this->admin_model->select_data('fasilitas')->result(),
            'kode_fasilitas'=> $this->admin_model->kode_auto('fasilitas','kode_fasilitas','FSLTS')
        );
        $this->load->view('templateAdmin/layout',$data);
    }
//end list Fasilitas

//start add_list_fasilitas => add_fasilitas.do
    public function add_list_fasilitas()
    {
        //validasi inputan register
        $this->form_validation->set_rules('kode_fasilitas', 'Kode Fasilitas', 'required|trim|is_unique[fasilitas.kode_fasilitas]');
        $this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required|trim|is_unique[fasilitas.nama_fasilitas]');
        $this->form_validation->set_rules('keterangan', 'Keterangan Fasilitas', 'required|trim');
        //ambil inputan value register

        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
            //munculkan notif
            $notif 	= $this->load->view('admin/notif',array('notif' =>'add_list_fasilitas_gagal'), TRUE);
            $this->session->set_flashdata("list_fasilitas", $notif);
            //set kembali data yang terkirim
            $data = array(
                'templateAdmin' => 'admin/fasilitas/list_fasilitas',
                'title'         => "Daftar Fasilitas",
                'menu'          => 'Fasilitas',
                'list_fasilitas'=> $this->admin_model->select_data('fasilitas')->result(),
                'kode_fasilitas'=> $this->admin_model->kode_auto('fasilitas','kode_fasilitas','FSLTS'),
                'nama_fasilitas'=>$this->input->post('nama_fasilitas'),
                'keterangan'    =>$this->input->post('keterangan')
            );
            $this->load->view('templateAdmin/layout',$data);
        } else {
            $data=array(
                'kode_fasilitas'=>$this->input->post('kode_fasilitas'),
                'nama_fasilitas'=>$this->input->post('nama_fasilitas'),
                'keterangan'    =>$this->input->post('keterangan'));
                $this->admin_model->insert_data('fasilitas',$data);
                //munculkan notif
                $notif 	= $this->load->view('admin/notif',array('notif' =>'add_list_fasilitas_sukses'), TRUE);
                $this->session->set_flashdata("list_fasilitas", $notif);
                redirect(site_url('admin/list_fasilitas.html'));
        }
    }
//end list add_list_fasilitas

//start list delete_fasilitas => delete_fasilitas.do/(:any)
    public function delete_fasilitas($kode_fasilitas)
    {
        $this->admin_model->delete_data('kode_fasilitas',$kode_fasilitas,'fasilitas');
        //munculkan notif
        $notif 	= $this->load->view('admin/notif',array('notif' =>'delete_fasilitas_sukses'), TRUE);
        $this->session->set_flashdata("list_fasilitas", $notif);
        redirect(site_url('admin/list_fasilitas.html'));
    }
//end list delete_fasilitas

//start list edit_fasilitas = > edit_fasilitas.html/(:any)
    public function edit_fasilitas($kode_fasilitas)
    {
        //update data
        $row=$this->admin_model->cek_data(array('kode_fasilitas'=>$kode_fasilitas),'fasilitas')->row();
        //load halaman dan kirim data kembali
        $data = array(
            'templateAdmin' => 'admin/fasilitas/edit_fasilitas',
            'title'         => "Daftar Fasilitas",
            'menu'          => 'Fasilitas',
            'list_fasilitas'=> $this->admin_model->select_data('fasilitas')->result(),
            'kode_fasilitas'=> $row->kode_fasilitas,
            'nama_fasilitas'=> $row->nama_fasilitas,
            'keterangan'    => $row->keterangan
        );
        $this->load->view('templateAdmin/layout',$data);
    }
//end list edit_fasilitas

//start list proses_edit_fasilitas => edit_fasilitas.do/(:any)
    public function proses_edit_fasilitas($kode_fasilitas)
    {
        $keterangan     = $this->input->post('keterangan');//ambil nilai keterangan
        if (is_null($keterangan)==TRUE) {
            $notif  = $this->load->view('admin/notif',array('notif' =>'update_gagal'), TRUE);
            $this->session->set_flashdata("list_fasilitas", $notif);
            redirect(site_url('admin/list_fasilitas.html'));
        } else {
            //update ke db
            $this->admin_model->update_data('kode_fasilitas',$kode_fasilitas,'fasilitas',array('keterangan'=>$keterangan));
            //set notif
            $notif  = $this->load->view('admin/notif',array('notif' =>'edit_fasilitas_sukses'), TRUE);
            $this->session->set_flashdata("list_fasilitas", $notif);
            redirect(site_url('admin/list_fasilitas.html'));
        }

    }
//end list proses_edit_fasilitas

//----------------------------------------END FASILITAS------------------------------------------//



//----------------------------------------START Jenis Armada------------------------------------------//

//start list kota => kota_penjemputan.html or kota_tujuan.html

    public function list_jenis_armada() //$kota di isi 'Penjemputan' / 'Tujuan'
    {
        $data = array(
            'templateAdmin'     => 'admin/jenis_armada/list_jenis_armada',
            'title'             => "Daftar Jenis Armada ",
            'menu'              => "Jenis Armada",
        );
        $this->load->view('templateAdmin/layout',$data);

    }

    public function list_jenis_armada_ajax() //$kota di isi 'Penjemputan' / 'Tujuan'
    {
        $this->db->where(array('status_jenis_armada'=>1));
        $data = array(
            'kode_jenis_armada' => $this->admin_model->kode_auto('jenis_armada','kode_jenis_armada','JNS')
        );
        $this->load->view('admin/jenis_armada/list_jenis_armada_ajax',$data);
    }

    public function tabel_list_jenis_armada(){
        $data = array(
            'list_jenis_armada' => $this->admin_model->cek_data(array('status_jenis_armada'=>1),'jenis_armada')->result(),
        );
        $this->load->view('admin/jenis_armada/tabel_list_jenis_armada',$data);
    }

    public function add_jenis_armada(){
        $nama_jenis_armada       = $this->input->post('nama_jenis_armada');
        $keterangan_jenis_armada = $this->input->post('keterangan_jenis_armada');

        $where  = array('nama_jenis_armada'=>$nama_jenis_armada,'status_jenis_armada'=>1);//cek data di database apakah ada nama kota yang sama dalam 1 jenis
        $exist  = $this->admin_model->cek_data($where,'jenis_armada');

        $this->db->where(array('status_jenis_armada'=>1));
        $kode_jenis_armada   = $this->admin_model->kode_auto('jenis_armada','kode_jenis_armada','JNS');

        if ($exist->num_rows()==0){//tidak ada yang sama, bisa lanjut input
            //ubah data ke bentuk array untuk di upload ke db
            $data       = array(
                'kode_jenis_armada'         =>$kode_jenis_armada,
                'nama_jenis_armada'         =>ucfirst($nama_jenis_armada),
                'keterangan_jenis_armada'   =>$keterangan_jenis_armada,
                'status_jenis_armada'       =>1,
                'add_by'            =>$this->session->userdata('username'),
                'change_by'         =>$this->session->userdata('username'),
            );
            $this->admin_model->insert_data('jenis_armada',$data);
            //kirim parameter notif berhasil
            $data       = array(
                'notif' =>'tambah_jenis_armada_sukses',
                'kode_jenis_armada'  =>$kode_jenis_armada,
                'nama_jenis_armada'  =>$nama_jenis_armada,
            );
            //load tampilan notif
            $this->load->view('admin/jenis_armada/notif',$data);

        } else { // nama kota yang di inputkan sudah ada, tampilkan pesan error
            //kirim parameter notif salah
            $data       = array(
                'notif' =>'nama_jenis_armada_sudah_ada',
                'nama'  =>$nama_jenis_armada,
            );
            //load tampilan notif
            $this->load->view('admin/jenis_armada/notif',$data);

        }
//        echo $data['kode'];
    }

    public function delete_jenis_armada($id){
//        $this->admin_model->delete_data('id_kota',$id,'kota');

        $this->admin_model->update_data('id_jenis_armada',$id,'jenis_armada',array('status_jenis_armada'=>0));
        //kirim parameter notif
        $data       = array(
            'notif' =>'hapus_jenis_armada_berhasil',
        );
        //load tampilan notif
        $this->load->view('admin/jenis_armada/notif',$data);
    }

    public function edit_jenis_armada($id){
        $jenis_armada = $this->admin_model->cek_data(array('id_jenis_armada'=>$id,'status_jenis_armada'=>1),'jenis_armada');

        if ($jenis_armada->num_rows()!=0){
            $data   = array(
                'jenis_armada'=>$jenis_armada->row(),
            );
            $this->load->view('admin/jenis_armada/edit_jenis_armada_ajax',$data);
        }

    }

    public function proses_edit_jenis_armada(){
        $kode_jenis_armada          = $this->input->post('kode_jenis_armada');
        $nama_jenis_armada          = $this->input->post('nama_jenis_armada');
        $keterangan_jenis_armada    = $this->input->post('keterangan_jenis_armada');
        $id_jenis_armada            = $this->input->post('id_jenis_armada');
//        echo "$id_jenis_armada , $kode_jenis_armada , $nama_jenis_armada , $jenis_jenis_armada, $keterangan_jenis_armada";
        //kirim parameter notif salah
//        $this->db->where();
        $where  = array('id_jenis_armada !='=> $id_jenis_armada,'nama_jenis_armada'=>$nama_jenis_armada,'status_jenis_armada'=>1);//cek data di database apakah ada nama jenis_armada yang sama dalam 1 jenis
        $exist  = $this->admin_model->cek_data($where,'jenis_armada');

        if ($exist->num_rows()==0){//tidak ada yang sama, bisa lanjut input
            //ubah data ke bentuk array untuk di upload ke db
            $data       = array(
                'nama_jenis_armada'         => ucfirst($nama_jenis_armada),
                'keterangan_jenis_armada'   => $keterangan_jenis_armada,
                'change_by'         		=> $this->session->userdata('username'),
            );
            $this->admin_model->update_data('id_jenis_armada',$id_jenis_armada,'jenis_armada',$data);
            $data       = array(
                'notif' =>'update_jenis_armada_berhasil'
            );
            //load tampilan notif
            $this->load->view('admin/jenis_armada/notif',$data);
        } else { // nama jenis_armada yang di inputkan sudah ada, tampilkan pesan error
            $data       = array(
                'notif' =>'update_jenis_armada_gagal'
            );
            //load tampilan notif
            $this->load->view('admin/jenis_armada/notif',$data);

        }
    }

//----------------------------------------END Jenis Armada------------------------------------------//

//----------------------------------------START FASILITAS------------------------------------------//

//start list armada => admin/list_armada.html
    public function list_armada()
    {
        $data = array(
            'templateAdmin' => 'admin/armada/list_armada',
            'title'         => "Daftar Armada",
            'menu'          => 'Armada',
        );
        $this->load->view('templateAdmin/layout',$data);
    }

//load form add armada
    public function list_armada_ajax()
    {
        $data = array(
            'menu'              => 'Armada',
            'list_jenis_armada' => $this->admin_model->cek_data(array('status_jenis_armada'=>1),'jenis_armada')->result(),
            'list_fasilitas'    => $this->admin_model->select_data('fasilitas')->result(),
            'kode_armada'       => $this->admin_model->kode_auto('armada','kode_armada','ARMD')
        );
        $this->load->view('admin/armada/list_armada_ajax',$data);
    }
//load tabel list armada
    public function tabel_list_armada(){
        $data = array(
            'list_armada'   => $this->admin_model->join_armada_jenis()->result(),
        );
        $this->load->view('admin/armada/tabel_list_armada',$data);
    }

//start add_list_armada => add_armada.do
    public function add_list_armada()
    {
        //validasi inputan register
        $this->form_validation->set_rules('kode_armada', 'Kode armada', 'required|trim|is_unique[armada.kode_armada]');
        //ambil inputan value register
        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
            //munculkan notif
            $this->load->view('admin/armada/notif',array(
                'notif'         => 'kode_armada_tidak_unique',
                'kode_armada'   => $this->input->post('kode_armada')
                )
            );
        } else {
			$data=array(
				'kode_armada'		=> $this->input->post('kode_armada'),
				'nama_armada'		=> $this->input->post('nama_armada'),
				'id_jenis_armada'  	=> $this->input->post('jenis_armada'),
				'kapasitas_armada'	=> $this->input->post('kapasitas_armada'),
				'status_armada'		=> 1,
				'keterangan_armada'	=> $this->input->post('keterangan_armada'),
			);
			$this->admin_model->insert_data('armada',$data);
			$id=$this->admin_model->cek_data(array('kode_armada'=>$data['kode_armada']),'armada')->row()->id_armada;
			//masukkan fasilitas
			$fasilitas=$this->input->post('fasilitas');
			if (sizeof($fasilitas)>0){
				foreach ($fasilitas as $key){
					$this->admin_model->insert_data('fasilitas_armada',array(
						'id_fasilitas'  => $key,
						'id_armada'     => $id,
					));
				}
			}
			//munculkan notif
			$this->load->view('admin/armada/notif',array(
					'notif'         => 'add_armada_sukses',
					'kode_armada'   => $this->input->post('kode_armada')
				)
			);
        }

    }
//end list add_list_armada

//start list delete_armada => delete_armada.do/(:any)
    public function delete_armada($id)
    {
        $this->admin_model->delete_data('id_armada',$id,'armada');
        //munculkan notif
        $this->load->view('admin/armada/notif',array(
                'notif' => 'hapus_armada_berhasil'
            )
        );
    }
//end list delete_armada

//start list edit_armada = > edit_armada.html/(:any)
    public function edit_armada($id_armada)
    {
        //update data
        $this->db->where(array('id_armada'=>$id_armada));
        $row    =$this->admin_model->join_armada_jenis();

        if ($row->num_rows()==1){
            $data = array(
                'list_jenis_armada'     => $this->admin_model->cek_data(array('status_jenis_armada'=>1),'jenis_armada')->result(),
                'list_fasilitas'        => $this->admin_model->select_data('fasilitas')->result(),
                'list_fasilitas_armada' => $this->admin_model->cek_data(array('id_armada'=>$id_armada),'fasilitas_armada')->result(),
                'row'                   => $row->row()
            );
            $this->load->view('admin/armada/edit_armada_ajax',$data);
        } else{
            //munculkan notif
            $this->load->view('admin/armada/notif',array(
                    'notif' => 'edit_armada_lebih_dari_1'
                )
            );
        }
    }
//end list edit_armada

//start list proses_edit_armada => edit_armada.do/(:any)
    public function proses_edit_armada($id_armada)
    {
        $nama_armada        = $this->input->post('nama_armada');
        $keterangan_armada  = $this->input->post('keterangan_armada');
        $id_jenis_armada    = $this->input->post('jenis_armada');//ambil nilai jenis_armada
        $kapasitas_armada   = $this->input->post('kapasitas_armada');//ambil nilai jenis_armada
        if ($this->admin_model->cek_data(array('id_armada'=>$id_armada),'armada')->num_rows()==0) {
            //munculkan notif
            $this->load->view('admin/armada/notif',array(
                    'notif' => 'edit_armada_lebih_dari_1'
                )
            );
        } else {
            //update ke db
            $this->admin_model->update_data('id_armada',$id_armada,'armada',array(
                'nama_armada'       =>$nama_armada,
                'kapasitas_armada'  =>$kapasitas_armada,
                'keterangan_armada' =>$keterangan_armada,
                'id_jenis_armada'   =>$id_jenis_armada,
                )
            );

            $fasilitas=$this->input->post('fasilitas');
            if (sizeof($fasilitas)>0){
                $this->admin_model->delete_data('id_armada',$id_armada,'fasilitas_armada');
                foreach ($fasilitas as $key){
                    $this->admin_model->insert_data('fasilitas_armada',array(
                        'id_fasilitas'  => $key,
                        'id_armada'     => $id_armada,
                    ));
                }
            }else{
				$this->admin_model->delete_data('id_armada',$id_armada,'fasilitas_armada');
			}
            //munculkan notif
            $this->load->view('admin/armada/notif',array(
                    'notif' => 'edit_armada_sukses'
                )
            );
        }
    }
//end list proses_edit_armada

	public function form_upload(){
		$data = array(
			'templateAdmin' => 'admin/armada/upload_foto',
			'title'         => "upload foto",
			'menu'          => 'Armada',
		);
		$this->load->view('templateAdmin/layout',$data);
	}


	public function upload(){
		$file	= url_title($this->input->post('userfile'));
		$this->load->library('uploader');
		$upload=$this->uploader->do_upload_img($file);
		var_dump($upload);
	}
//end list armada

//----------------------------------------END FASILITAS------------------------------------------//


//----------------------------------------START WAKTU------------------------------------------//

//start list waktu => waktu_penjemputan.html or waktu_tujuan.html
    public function list_waktu() //$waktu di isi 'Penjemputan' / 'Tujuan'
    {
        $data = array(
            'templateAdmin'     => 'admin/waktu/list_waktu',
            'title'             => "Daftar Waktu",
            'menu'              => "Waktu",
            'list_waktu'        => $this->admin_model->select_data('waktu')->result(),
            'kode_waktu'        => $this->admin_model->kode_auto('waktu','kode_waktu','WKT')
        );
        $this->load->view('templateAdmin/layout',$data);
    }
//start add_list_waktu => add_waktu.do
    public function add_list_waktu()
    {
        //validasi inputan
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_waktu', 'Kode waktu', 'required|trim|is_unique[waktu.kode_waktu]');
        $this->form_validation->set_rules('deskripsi_waktu', 'Nama waktu', 'required|trim');
        $this->form_validation->set_rules('durasi_waktu', 'Durasi waktu', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        //ambil inputan value register
        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
            //munculkan notif
            $notif 	= $this->load->view('admin/notif',array('notif' =>'add_list_waktu_gagal'), TRUE);
            $this->session->set_flashdata("list_waktu", $notif);
            //set kembali data yang terkirim
            $data = array(
                'templateAdmin' => 'admin/waktu/list_waktu',
                'title'         => "Daftar waktu",
                'menu'          => 'waktu',
                'list_waktu'    => $this->admin_model->select_data('waktu')->result(),
                'kode_waktu'    => $this->admin_model->kode_auto('waktu','kode_waktu','FSLTS'),
                'deskripsi_waktu'=> $this->input->post('deskripsi_waktu'),
                'durasi_waktu'  => $this->input->post('durasi_waktu'),
                'keterangan'=> $this->input->post('keterangan')
            );
            $this->load->view('templateAdmin/layout',$data);
        } else {
            $data=array(
                'kode_waktu'        => $this->input->post('kode_waktu'),
                'deskripsi_waktu'   => $this->input->post('deskripsi_waktu'),
                'durasi_waktu'      => $this->input->post('durasi_waktu'),
                'keterangan'        => $this->input->post('keterangan'));
            $this->admin_model->insert_data('waktu',$data);
            //munculkan notif
            $notif 	= $this->load->view('admin/notif',array('notif' =>'add_list_waktu_sukses'), TRUE);
            $this->session->set_flashdata("list_waktu", $notif);
            redirect(site_url('admin/list_waktu.html'));
        }
    }
//end list add_list_waktu

//start list edit_waktu = > edit_waktu.html/(:any)
    public function edit_waktu($kode_waktu)
    {
        //update data
        $row=$this->admin_model->cek_data(array('kode_waktu'=>$kode_waktu),'waktu')->row();
        //load halaman dan kirim data kembali
        $data = array(
            'templateAdmin' => 'admin/waktu/edit_waktu',
            'title'         => "Daftar waktu",
            'menu'          => 'waktu',
            'list_waktu'   => $this->admin_model->select_data('waktu')->result(),
            'kode_waktu'   => $row->kode_waktu,
            'deskripsi_waktu'=> $row->deskripsi_waktu,
            'durasi_waktu'  => $row->durasi_waktu,
            'keterangan'    => $row->keterangan
        );
        $this->load->view('templateAdmin/layout',$data);
    }
//end list edit_waktu

//start list proses_edit_waktu => edit_waktu.do/(:any)
    public function proses_edit_waktu($kode_waktu)
    {
        $deskripsi_waktu    = $this->input->post('deskripsi_waktu');//ambil nilai durasi_waktu
        $durasi_waktu    = $this->input->post('durasi_waktu');//ambil nilai durasi_waktu
        $keterangan      = $this->input->post('keterangan');//ambil nilai durasi_waktu
        if (is_null($durasi_waktu)==TRUE) {
            $notif  = $this->load->view('admin/notif',array('notif' =>'update_gagal'), TRUE);
            $this->session->set_flashdata("list_waktu", $notif);
            redirect(site_url('admin/list_waktu.html'));
        } else {
            //update ke db
            $this->admin_model->update_data('kode_waktu',$kode_waktu,'waktu',array('durasi_waktu'=>$durasi_waktu,'keterangan'=>$keterangan,'deskripsi_waktu'=>$deskripsi_waktu));
            //set notif
            $notif  = $this->load->view('admin/notif',array('notif' =>'edit_waktu_sukses'), TRUE);
            $this->session->set_flashdata("list_waktu", $notif);
            redirect(site_url('admin/list_waktu.html'));
        }
    }
//end list proses_edit_waktu

//start list delete_waktu => delete_waktu.do/(:any)
    public function delete_waktu($kode_waktu)
    {
        $this->admin_model->delete_data('kode_waktu',$kode_waktu,'waktu');
        //munculkan notif
        $notif 	= $this->load->view('admin/notif',array('notif' =>'delete_waktu_sukses'), TRUE);
        $this->session->set_flashdata("list_waktu", $notif);
        redirect(site_url('admin/list_waktu.html'));
    }
//end list delete_waktu

    //----------------------------------------END WAKTU------------------------------------------//


    //----------------------------------------USER----------------------------------------------//
    public function user_list(){
        $data=array(
            'templateAdmin' => 'admin/user/user_list',
            'title'         => "Daftar waktu",
            'menu'          => 'User',
            'list_user'     => $this->admin_model->select_data('user')->result(),
        );
        $this->load->view('templateAdmin/layout',$data);
    }

//----------------------------------------START HARGA REQUEST------------------------------------------//

    public function daftar_harga($tipe_harga)
    {
		$data = array(
			'templateAdmin'     => 'admin/harga/list_harga',
			'title'             => "Daftar Harga",
			'menu'              => "Harga",
			'submenu'           => ucfirst($tipe_harga),
			'link_add'			=> "admin/form_add_harga_".$tipe_harga.".html",
			'link_tabel'		=> "admin/list_harga_".$tipe_harga.".html"
		);
		$this->load->view('templateAdmin/layout',$data);
    }

	/**
	 * @param $tipe_harga
	 */
	public function daftar_harga_ajax($tipe_harga)
    {
    	if ($tipe_harga=="request"){
			$this->db->where(array('tipe_harga'=>'1','status_harga'=>'1'));
//			$kondisi=array('tipe_harga'=>'1','status_harga'=>'1');
		} else {
			$this->db->where(array('tipe_harga'=>'0','status_harga'=>'1'));
//			$kondisi=array('tipe_harga'=>'0','status_harga'=>'1');
		}
		$data = array(
			'tipe_harga'		=> ucfirst($tipe_harga),
			'list_harga' => $this->admin_model->join_daftar_harga()->result(),
		);
		$this->load->view('admin/harga/tabel_list_harga',$data);
	}

	/**
	 * @param $tipe_harga
	 */
	public function form_add_harga($tipe_harga) // route from admin/form_add_harga_request.html
    {
    	if ($tipe_harga=="request" || $tipe_harga=="paket"){
			$data = array(
				'menu'				=> $tipe_harga,
				'kode_harga'        => $this->admin_model->kode_auto('daftar_harga','kode_harga','HRGR'),
				'armada'            => $this->admin_model->filter_data(array('status_armada'=>1),'armada'),
				'list_kota_awal'    => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1),'kota'),
				'list_kota_tujuan'  => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1),'kota')
			);
			$this->load->view("admin/harga/form_add_harga",$data);
		} else {
			show_404();
		}
    }

    public function proses_tambah_harga()
    {
        //validasi inputan
        $this->form_validation->set_rules('kode_harga', 'Kode Harga', 'is_unique[daftar_harga.kode_harga]');
        //ambil inputan value register
        if ($this->form_validation->run() == FALSE)//jika ada yang salah
        {
			$data       = array(
				'notif' =>'tambah_harga_gagal',
			);
			//load tampilan notif
			$this->load->view('admin/harga/notif',$data);
        } else {
            $data=array(
                'kode_harga'    => $this->admin_model->kode_auto('daftar_harga','kode_harga','HRGR'),
                'nama_harga'    => $this->input->post('nama_harga'),
                'tipe_harga'    => $this->input->post('tipe_harga'),
                'id_armada'   	=> $this->input->post('kode_armada'),
                'id_kota_awal'  => $this->input->post('kota_awal'),
                'id_kota_tujuan'=> $this->input->post('kota_tujuan'),
                'harga'         => str_replace(',','',$this->input->post("harga")),
                'tambahan_harga'=> str_replace(',','',$this->input->post("tambahan")),
                'potongan_harga'=> str_replace(',','',$this->input->post("potongan")),
                'keterangan_harga'=> $this->input->post('keterangan_harga'),
                'durasi'        => $this->input->post('durasi'),
                'status_harga'  => '1',
                'add_by'        => $this->session->userdata('username')
            );
            $this->admin_model->insert_data('daftar_harga',$data);
			$data2 = array(
				'notif' 		=> 'tambah_harga_sukses',
				'kode_harga'	=> $data['kode_harga'],
				'nama_harga'	=> $data['nama_harga'],
			);
			//load tampilan notif
			$this->load->view('admin/harga/notif',$data2);

        }
    }

    public function edit_harga($kode_harga)
    {
//        $row=$this->admin_model->cek_data(array('kode'=>$kode_harga),'daftar_harga')->row();
        //load halaman dan kirim data kembali
		$kondisi = array(
			'kode_harga'	=>$kode_harga,
			'status_harga'	=>'1');
		$this->db->where($kondisi);
        $daftar_harga	= $this->admin_model->join_daftar_harga()->row();
		//cari tipe harga
        if($daftar_harga->tipe_harga==1){
			$tipe="request";
		} elseif ($daftar_harga->tipe_harga==0){
			$tipe="paket";
		};

        $data = array(
        	'menu'				=> $tipe,
            'daftar_harga'     	=> $daftar_harga,
			'armada'            => $this->admin_model->filter_data(array('status_armada'=>1,'id_armada !='=>$daftar_harga->id_armada),'armada'),
			'list_kota_awal'    => $this->admin_model->filter_data(array('jenis_kota'=>0,'status_kota'=>1,'id_kota !='=>$daftar_harga->id_kota_awal),'kota'),
			'list_kota_tujuan'  => $this->admin_model->filter_data(array('jenis_kota'=>1,'status_kota'=>1,'nama_kota !='=>$daftar_harga->nama_kota_tujuan),'kota'),

        );
        $this->load->view('admin/harga/form_edit_harga',$data);
    }


    public function proses_edit_harga()
    {
        $kode               = $this->input->post('kode_harga');
        $data=array(
			'nama_harga'    => $this->input->post('nama_harga'),
			'id_armada'   	=> $this->input->post('kode_armada'),
			'id_kota_awal'  => $this->input->post('kota_awal'),
			'id_kota_tujuan'=> $this->input->post('kota_tujuan'),
			'harga'         => str_replace(',','',$this->input->post("harga")),
			'tambahan_harga'=> str_replace(',','',$this->input->post("tambahan")),
			'potongan_harga'=> str_replace(',','',$this->input->post("potongan")),
			'keterangan_harga'=> $this->input->post('keterangan_harga'),
			'durasi'		=> $this->input->post('durasi'),
			'change_by'     => $this->session->userdata('username')
        );
        //update ke db
        $this->admin_model->update_data('kode_harga',$kode,'daftar_harga',$data);
        //set notif
		$data2 = array(
			'notif' 		=> 'edit_harga_sukses',
			'kode_harga'	=> $kode,
		);
		//load tampilan notif
		$this->load->view('admin/harga/notif',$data2);
    }

    public function delete_harga($kode_harga)
    {
		$this->admin_model->update_data('kode_harga',$kode_harga,'daftar_harga',array('status_harga'=>0));
		//kirim parameter notif
		$data       = array(
			'notif' 	=> 'hapus_harga_berhasil',
			'kode_harga'=> $kode_harga
		);
		//load tampilan notif
		$this->load->view('admin/harga/notif',$data);
    }
//----------------------------------------END HARGA REQUEST------------------------------------------//



//----------------------------------------START HARGA REQUEST------------------------------------------//

	public function list_customer()
	{
		$data = array(
			'templateAdmin'     => 'admin/customer/list_customer',
			'title'             => "Daftar Customer",
			'menu'              => "Customer",
			'submenu'           => "Customer",
		);
		$this->load->view('templateAdmin/layout',$data);
	}

	public function form_add_customer()
	{
		$data = array('kode_customer' => $this->admin_model->kode_auto('customer','kode_customer','CUST'));
		$this->load->view('admin/customer/form_add_customer',$data);
	}

	public function  form_edit_customer($id_customer)
	{
		$kondisi	= "id_customer = {$id_customer} and status_customer=1";
		$cust 		= $this->admin_model->filter_data($kondisi,'customer');
		if ($cust->num_rows()==1){
			$this->load->view('admin/customer/form_edit_customer',array('customer'=>$cust->row()));
		} else {
			$data       = array(
				'notif' 		=> 'data_tidak_ditemukan'
			);
			$this->load->view('admin/customer/notif',$data);
			$data = array('kode_customer' => $this->admin_model->kode_auto('customer','kode_customer','CUST'));
			$this->load->view('admin/customer/form_add_customer',$data);
		}
	}

	public function tabel_list_customer()
	{
		$data = array(
			'list_customer'	=> $this->admin_model->filter_data(array('status_customer'=>1),'customer')->result(),
		);
		$this->load->view('admin/customer/tabel_list_customer',$data);
	}

	public function add_customer()
	{
		$data = array(
			'kode_customer'    		=> $this->input->post("kode_customer"),
			'nama_customer'   		=> $this->input->post("nama_customer"),
			'alamat_customer'  		=> $this->input->post("alamat_customer"),
			'telepon_customer'	 	=> $this->input->post("telepon_customer"),
			'keterangan_customer'	=> $this->input->post("keterangan_customer")
		);

		$this->form_validation->set_rules('kode_customer', 'Kode Fasilitas', 'is_unique[customer.kode_customer]');
		$this->form_validation->set_rules('telepon_customer', 'Nomor Telepon', 'numeric|min_length[9]|max_length[14]');
		//ambil inputan value register

		if ($this->form_validation->run() == FALSE)//jika ada yang salah
		{
			$notif       = array(
				'notif' 	=> 'add_customer_gagal'
			);
		}else{
			$notif = array(
				'notif' 		=> 'add_customer_sukses',
				'kode_customer'	=> $data['kode_customer']
			);
			$this->admin_model->insert_data('customer',$data);
		}
		$this->load->view('admin/customer/notif',$notif);
	}

	public function proses_edit_customer()
	{
		$id_customer = $this->input->post("id_customer");
		$data = array(
			'kode_customer'    		=> $this->input->post("kode_customer"),
			'nama_customer'   		=> $this->input->post("nama_customer"),
			'alamat_customer'  		=> $this->input->post("alamat_customer"),
			'telepon_customer'	 	=> $this->input->post("telepon_customer"),
			'keterangan_customer'	=> $this->input->post("keterangan_customer")
		);
		$this->form_validation->set_rules('telepon_customer', 'Nomor Telepon', 'numeric|min_length[9]|max_length[14]');
		//ambil inputan value register

		if ($this->form_validation->run() == FALSE)//jika ada yang salah
		{
			$notif       = array(
				'notif' 	=> 'add_customer_gagal'
			);
		}else{
			$this->admin_model->update_data('id_customer',$id_customer,'customer',$data);
			$notif = array(
				'notif' 		=> 'edit_customer_sukses',
				'kode_customer'	=> $data['kode_customer']
			);
		}
		$this->load->view('admin/customer/notif',$notif);
	}

	public function delete_customer($id_customer)
	{
		$kondisi	= "id_customer = $id_customer and status_customer = '1'";
		$cust 		= $this->admin_model->filter_data($kondisi,'customer');
		if ($cust->num_rows()==1){
			$this->admin_model->update_data('id_customer',$id_customer,'customer',array(
				'status_customer'	=> 0,
				'kode_customer'		=> '00000',
				'old_kode'			=> $cust->row()->kode_customer,
			));

			//load tampilan notif
			$data       = array(
				'notif' 		=> 'hapus_customer_berhasil',
				'kode_customer'	=> $cust->row()->kode_customer
			);
			$this->load->view('admin/customer/notif',$data);
		} else {
			$data       = array(
				'notif' 	=> 'data_tidak_ditemukan'
			);
			//load tampilan notif
			$this->load->view('admin/customer/notif',$data);
		}
	}

	public function notify(){

		$armada	= $this->admin_model->filter_data("user = '".$this->session->userdata('id_user')."'",'notifikasi');
		if ($armada->num_rows()!=0){
			$notif = $this->admin_model->filter_data("entry_time >= '".$armada->row()->tgl_notify_js."'",'armada');

			if ($notif->num_rows()!=0){
				$data = array(
					'notif'	=> 'notifyjs',
					'pesan'	=> $notif->num_rows().' Armada Baru Ditambahkan!<br> Klik disini ',
					'link'	=> site_url('admin/list_armada.html'),
					);
				$this->load->view('templateAdmin/notifikasi',$data);
				$this->admin_model->update_data('id',$armada->row()->id,'notifikasi',array('tgl_notify_js'=>date('Y-m-d H:i:s')));
			}
		}

	}
	public function notifikasi(){
		$armada	= $this->admin_model->filter_data("user = '".$this->session->userdata('id_user')."'",'notifikasi');
		if ($armada->num_rows()!=0){
			$notif = $this->admin_model->filter_data("status_armada=1 and entry_time >= '".$armada->row()->tgl_notif_nav."'",'armada');

			if ($notif->num_rows()!=0){
				$data = array(
					'notif'	=> 'notifikasi_navbar',
					'pesan'	=> $notif->num_rows().' Armada Baru Ditambahkan',
					'link'	=> site_url('admin/list_armada.html'),
					'count'	=> $notif->num_rows(),
				);
				$this->load->view('templateAdmin/notifikasi',$data);
			} else {
				$data = array(
					'notif'	=> 'tidak_ada_notifikasi_navbar',
				);
				$this->load->view('templateAdmin/notifikasi',$data);
			}

		} else {
			$data = array(
				'notif'	=> 'tidak_ada_notifikasi_navbar',
			);
			$this->load->view('templateAdmin/notifikasi',$data);
		}

	}
}
/* End of file Admin.php */

