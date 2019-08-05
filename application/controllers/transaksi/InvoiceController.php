<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: PC-06
 * Date: 19/03/2019
 * Time: 12:50
 */

class InvoiceController extends CI_Controller
{
	private $layout     = 'template/layout';
	private $path_view  = 'pages/config/routing/';

	function __construct(){
		parent::__construct();
		$this->load->model('config/M_menutree');
	}

	public function index(){
		$menu = $this->M_menutree->find_view();
		$data = [
			'title'             => 'List Menu',
			'parent'            => $menu->row_array(),
			'page'              => $this->path_view.'routing_list',
			'button_right'      => '
                                    <div class="btn-group float-md-right">
                                        <button type="button" class="btn btn-success square btn-min-width mr-1 mb-1 pull-up" autofocus onclick="add_person()"><i class="la la-plus"></i> Add New</button>
                                        <button type="button" class="btn btn-primary square btn-min-width mr-1 mb-1 pull-up" onclick="reload_table()"><i class="la la-refresh"></i> Refresh</button>
                                    </div>'
		];
		$this->breadcrumbs->push('Home','dashboard'); // setting breadcrumb home
		$this->breadcrumbs->push('Config','config/'); // setting breadcrumb home
		$this->breadcrumbs->push('Menu','config/menu/'); // setting breadcrumb home
		$this->breadcrumbs->push('List Routing','config/menu/index'); // setting breadcrumb home
		$this->load->view($this->layout,$data);
	}

	public function ajax_list()
	{
		$list   = $this->M_menutree->get_datatables();

		//Declare table
		$data       = array();
		$no         = $_POST['start'];
		foreach ($list as $value) {
			$i = $no+1;
			$row = array();
			$row[] = '<p class="badge badge-dark">'.$i++;
			$row[] = $value[M_menutree::V_MENU];
			$row[] = $value[M_menutree::T_ROUTELINK];
			$row[] = $value[M_menutree::T_CONTROLLERLINK];
			//add html for action
			$row[] = '
                <a class="btn btn-sm btn-success" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Edit Detail" onclick="edit_person('."'".$value[M_menutree::V_SYS]."'".')"><i class="ft-edit"></i></a>
				<a class="btn btn-sm btn-danger" href="javascript:void(0)"  data-toggle="tooltip" data-placement="top" title="Delete Detail" onclick="delete_person('."'".$value[M_menutree::V_SYS]."'".')"><i class="ft-trash"></i></a>
				';
			$data[] = $row;
			$no++;
		}

		$output = array(
			"draw"              => $_POST['draw'],
			"recordsTotal"      => $this->M_menutree->count_all(),
			"recordsFiltered"   => $this->M_menutree->count_filtered(),
			"data"              => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->M_menutree->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_do()
	{
		$INPUT = [
			'UPDATE'                        => $this->input->post('UPDATE'),
			M_menutree::T_SYS               => $this->input->post(M_menutree::T_SYS),
			M_menutree::T_PARENT_SYS        => $this->input->post(M_menutree::T_PARENT_SYS),
			M_menutree::T_ROUTELINK         => $this->input->post(M_menutree::T_ROUTELINK),
			M_menutree::T_CONTROLLERLINK    => $this->input->post(M_menutree::T_CONTROLLERLINK),
			M_menutree::T_MENU              => $this->input->post(M_menutree::T_MENU),
			M_menutree::T_ICON              => $this->input->post(M_menutree::T_ICON)
		];
		$this->_validate($INPUT);
		if($INPUT['UPDATE'] === 'FALSE'){//add
			$data = [
				M_menutree::T_SYS               => $INPUT[M_menutree::T_SYS],
				M_menutree::T_PARENT_SYS        => $INPUT[M_menutree::T_PARENT_SYS],
				M_menutree::T_ROUTELINK         => $INPUT[M_menutree::T_ROUTELINK],
				M_menutree::T_CONTROLLERLINK    => $INPUT[M_menutree::T_CONTROLLERLINK],
				M_menutree::T_MENU              => $INPUT[M_menutree::T_MENU],
				M_menutree::T_ICON              => $INPUT[M_menutree::T_ICON],
				M_menutree::T_TYPE              => 1,
				M_menutree::T_ADDED_BY          => $this->role->user_id_yang_login(),
				M_menutree::T_MODIFIED_BY       => NULL,
				M_menutree::T_DEPTH             => $this->M_menutree->get_depth($INPUT[M_menutree::T_PARENT_SYS]),
				M_menutree::T_SEQUENCE          => $this->M_menutree->get_sequence($INPUT[M_menutree::T_PARENT_SYS]),
			];
			$this->db->trans_begin();
			$this->M_menutree->save($data);
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				$status = [
					"status" => FALSE,
					'messages'=>'Input master Gagal!'
				];
			}
			else
			{
				$this->db->trans_commit();
				$status = [
					"status" => TRUE,
					'messages'=>'Data Berhasil Di Tambahkan!'
				];
			}
			echo json_encode($status);
		}else{//update
			$data = array(
				M_menutree::T_ROUTELINK         => $this->input->post(M_menutree::T_ROUTELINK),
				M_menutree::T_CONTROLLERLINK    => $this->input->post(M_menutree::T_CONTROLLERLINK),
				M_menutree::T_MENU              => $this->input->post(M_menutree::T_MENU),
				M_menutree::T_ICON              => $this->input->post(M_menutree::T_ICON)
			);
			$this->M_menutree->update($INPUT[M_menutree::T_SYS], $data);
			$status = [
				"status"    => TRUE,
				'messages'  => 'Data Berhasil Di Ubah!'
			];
			echo json_encode($status);
		}
	}

	public function ajax_delete($id)
	{
		if ($this->M_menutree->delete_by_id($id)){
			$status = [
				"status" => TRUE,
				'messages'=>'Data Berhasil Di Hapus!'
			];
		}else{
			$status = [
				"status" => FALSE,
				'messages'=>'<h5>Tidak bisa menghapus menu karena sedang digunakan!</h5>'
			];
		}
		echo json_encode($status);
	}

	private function _validate($INPUT = [])
	{
		$data                   = [];
		$data['error_string']   = array();
		$data['inputerror']     = array();
		$data['notiferror']     = array();
		$data['status']         = TRUE;
		$data['sw_alert']       = FALSE;

		if($INPUT['UPDATE']==='FALSE'){
			$exist                  = $this->M_menutree->find("ROUTELINK ='".$INPUT[M_menutree::T_ROUTELINK]."' and ROUTELINK !='#'" )->num_rows();
		}elseif ($INPUT['UPDATE']==='TRUE'){
			$exist                  = $this->M_menutree->find("ROUTELINK ='".$INPUT[M_menutree::T_ROUTELINK]."' and ROUTELINK !='#' and SYS != {$INPUT[M_menutree::T_SYS]} " )->num_rows();
		}

		if (empty($INPUT[M_menutree::T_MENU])) {
			$error                  = 'Menu Tidak Boleh Kosong';
			$data['inputerror'][]   = M_menutree::T_MENU;
			$data['notiferror'][]   = Conversion::template_error($error);
			$data['error_string'][] = $error;
			$data['status']         = FALSE;
			$data['sw_alert']       = FALSE;
		}

		if (empty($INPUT[M_menutree::T_ROUTELINK])) {
			$error                  = 'Menu Tidak Boleh Kosong';
			$data['inputerror'][]   = M_menutree::T_ROUTELINK;
			$data['notiferror'][]   = Conversion::template_error($error);
			$data['error_string'][] = $error;
			$data['status']         = FALSE;
			$data['sw_alert']       = FALSE;
		}elseif($exist>=1){
			$error                  = 'Link Menu Sudah Digunakan. Coba Yang Lain';
			$data['inputerror'][]   = M_menutree::T_ROUTELINK;
			$data['notiferror'][]   = Conversion::template_error($error);
			$data['error_string'][] = $error;
			$data['status']         = FALSE;
			$data['sw_alert']       = FALSE;
		}

		if (empty($INPUT[M_menutree::T_CONTROLLERLINK])) {
			$error                  = 'Controller Link Tidak Boleh Kosong';
			$data['inputerror'][]   = M_menutree::T_CONTROLLERLINK;
			$data['notiferror'][]   = Conversion::template_error($error);
			$data['error_string'][] = $error;
			$data['status']         = FALSE;
			$data['sw_alert']       = FALSE;
		}

		if (empty($INPUT[M_menutree::T_ICON])) {
			$error                  = 'Icon Menu Tidak Boleh Kosong';
			$data['inputerror'][]   = M_menutree::T_ICON;
			$data['notiferror'][]   = Conversion::template_error($error);
			$data['error_string'][] = $error;
			$data['status']         = FALSE;
			$data['sw_alert']       = FALSE;
		}


		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}
