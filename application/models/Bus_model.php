<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_model extends CI_Model
{
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

    public function get_fasilitas_armada($table1,$table2,$table3,$value){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table3, 'armada.id_armada = fasilitas_armada.id_armada');
        $this->db->join($table2, 'fasilitas.id_fasilitas = fasilitas_armada.id_fasilitas');
        $this->db->where($value);
        $result= $this->db->get();
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