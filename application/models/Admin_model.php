<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function cek_login($data,$tabel)
    {
        $where = "(username='".$data["username"]."' OR email='".$data["username"]."') AND password='".$data["password"]."'";
        $this->db->where($where);
        // $this->db->where($data);
        $result=$this->db->get($tabel);
        return $result;
    }

    public function select_max($kolom,$tabel)
    {
        $this->db->select_max($kolom);
        $query = $this->db->get($tabel);  // Produces: SELECT MAX(age) as age FROM members
        return $query;
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

    public function delete_data($id,$valueid,$tabel)
    {
        $this->db->where($id,$valueid);
        $this->db->delete($tabel);
    }

    public function select_data($tabel)
    {
        $result=$this->db->get($tabel);
        return $result;
    }

    public function filter_data($data,$tabel)
    {
        $this->db->where($data);
        $result=$this->db->get($tabel);
        return $result;
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

    function kode_auto_kota($tabel,$id,$kode,$jenis)
    {
        $this->db->where(array('jenis_kota'=>$jenis,'status_kota'=>1));
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

    public function join_data($kolom,$tabel1,$tabel2,$where)
    {
        $this->db->select($kolom);
        $this->db->from($tabel1);
        $this->db->join($tabel2, $where,'left');
        return  $this->db->get();
    }

    public function join_armada_jenis()
    {
        //untuk select join data armada + jenis_armada
        $kolom  = 'a.*,b.nama_jenis_armada as jenis_armada' ;
        $tabel1 = 'armada a';
        $tabel2 = 'jenis_armada b';
        $where  = 'a.id_jenis_armada = b.id_jenis_armada';

        $this->db->select($kolom);
        $this->db->from($tabel1);
        $this->db->join($tabel2, $where,'left');
        return  $this->db->get();
    }

    public function join_daftar_harga()
    {
        //untuk select join data armada + jenis_armada
        $kolom   = 'a.*,b.nama_kota as nama_kota_awal,c.nama_kota as nama_kota_tujuan, d.nama_armada as nama_armada, d.kode_armada as kode_armada, d.kapasitas_armada as kapasitas_armada' ;
        $tabel1  = 'daftar_harga a';
        $tabel2  = 'kota b';
        $tabel3  = 'kota c';
        $tabel4  = 'armada d';
        $where2  = 'a.id_kota_awal = b.id_kota';
        $where3  = 'a.id_kota_tujuan = c.id_kota';
        $where4  = 'a.id_armada = d.id_armada';

        $this->db->select($kolom);
        $this->db->from($tabel1);
        $this->db->join($tabel2, $where2,'left');
        $this->db->join($tabel3, $where3,'left');
        $this->db->join($tabel4, $where4,'left');
        return  $this->db->get();
    }


	public function join_kota_harga($tipe,$groupby)
	{
		$kolom  = 'a.*,b.nama_kota as kota_awal, c.nama_kota as kota_tujuan' ;
		$tabel1 = 'daftar_harga a';
		$tabel2 = 'kota b';
		$tabel3 = 'kota c';
		$on2  	= 'a.id_kota_awal=b.id_kota';
		$on3  	= 'a.id_kota_tujuan=c.id_kota';
		$where  = "a.status_harga=1 AND tipe_harga={$tipe}";

		$this->db->select($kolom);
		$this->db->from($tabel1);
		$this->db->join($tabel2, $on2,'left');
		$this->db->join($tabel3, $on3,'left');
		$this->db->where($where);
		return  $this->db->get();
	}


	public function kota_join_harga($tipe_harga,$jenis_kota) // tipe 1 = request, tipe 0 = paket, jenis : awal / tujuan
	{
		$kolom  = 'a.id_kota as id_kota,a.nama_kota as nama_kota' ;
		$tabel1 = 'kota a';
		$tabel2 = 'daftar_harga b';
		$on2  	= "a.id_kota=b.id_kota_{$jenis_kota}";
		$where  = "b.status_harga=1 AND tipe_harga={$tipe_harga} and a.status_kota=1";//status 0 : kota awal, status kota 1 = kota aktif
		$group	= "a.nama_kota";

		$this->db->select($kolom);
		$this->db->from($tabel1);
		$this->db->join($tabel2, $on2,'left');
		$this->db->where($where);
		$this->db->group_by($group);
		return  $this->db->get();
	}

	function kode_auto_pesanan()
	{
		$this->db->select_max('RIGHT(kode_pesanan,4)', 'kd_max');//select
		$query = $this->db->get('pesanan');
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
		return 'TRVL'.date('dmY').$kd;
	}

	function kode_booking()
	{
		$x=0;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 6; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$kode = $randomString;

		while ($x==0){
			$this->db->where("kode_booking ='".$kode."' ");
			$result=$this->db->get('pesanan');
			if ($result->num_rows()==0){
				$kode_booking = $kode;
				$x = 1;
			} else {
				$randomString = '';
				for ($i = 0; $i < 6; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				$kode=$randomString;
				$kode_booking = 0;
			}
		}
		return strtoupper($kode_booking);
	}



}
