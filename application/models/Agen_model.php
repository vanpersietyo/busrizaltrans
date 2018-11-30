<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agen_model extends CI_Model {

    public function cek_login($data,$tabel)
	{
		$where = "(username='".$data["username"]."' OR email='".$data["username"]."') AND password='".$data["password"]."'";
		$this->db->where($where);
		// $this->db->where($data);
		$result=$this->db->get($tabel);
		return $result;
	}

    public function insert_data($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

    public function update_data($id,$valueid,$tabel,$data)
	{
		$this->db->where($id,$valueid);
		$this->db->update($tabel,$data);
	}

    public function delete_sessions($id,$valueid,$tabel)
	{
		$this->db->where($id,$valueid);
		$this->db->delete($tabel);
	}

    public function cek_data($data,$tabel)
	{
		$this->db->where($data);
		$result=$this->db->get($tabel);
		return $result;
	}

    function kode_auto($tabel,$id,$kode)
    {
        $this->db->select_max('RIGHT('.$id.',4)', 'kd_max');//select
        $query = $this->db->get($tabel);
        $kd = "";
        if($query->num_rows()>0)
        {
            foreach($query->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "0001";
        }
        return $kode.$kd;
    }

}
