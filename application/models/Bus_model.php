<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_model extends CI_Model
{
    private $tb_daftar_harga = 'daftar_harga';
    public function get_all_armada($table1){
        $this->db->select('*');
        $this->db->from($table1);
        $result=$this->db->get();
        return $result;
    }

    public function get_detail_armada($table,$value){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($value);
        $result= $this->db->get();
        return $result;
    }

    public function get_fasilitas_armada($table1,$table2,$table3,$value){ //table armada, tabel fasilitas_armada, tabel fasilitas
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, 'armada.id_armada = fasilitas_armada.id_armada');
        $this->db->join($table3, 'fasilitas.id_fasilitas = fasilitas_armada.id_fasilitas');
        $this->db->where($value);
        $result= $this->db->get();
        return $result;
    }

    public function get_shcedule($table,$table1,$value){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table1, 'daftar_harga.id_armada = armada.id_armada');
        $this->db->where($value);
        $result= $this->db->get();
        return $result;
    }

    //get id_armada from tb daftar_harga
    public function get_idarmada($where){
        $this->db->select('id_armada');
        $this->db->from($this->tb_daftar_harga);
        $this->db->where($where);
        $result = $this->db->get();
        return $result;    
	}
	
	//check armada di tabel pesanan
	public function check_bus($table,$where)
	{
		$this->db->select('id_armada,tanggal_akhir');
		$this->db->from($table);
		$this->db->where($where);
		$result =$this->db->get();
		return $result;
	}
}

/* End of Bus_model.php */


/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 28/08/2018
 * Time: 22.38
 */
