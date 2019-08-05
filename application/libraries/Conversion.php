<?php
/**
 * Created by PhpStorm.
 * User: PC-06
 * Date: 25/01/2019
 * Time: 11:16
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion {

	public function __construct()
	{
		$this->CI =& get_instance();
		date_default_timezone_set("Asia/Bangkok");
	}

	function numberFormat($value,$jenis=null)//jenis 1 =  ubah nilai jadi separator titik(.); jenis 2 = jika value 0, ganti dash; jenis 3 = replace ,(comma jadi tidak ada, biar bisa di hitung)
	{
		if ($jenis==null){
			return number_format($value, 0, '.', ',');
		} elseif ($jenis==1){
			if ($value == 0 || $value == '' || $value == null) {
				return '-';
			} else {
				return number_format($value, 0, '.', ',');
			}
		}elseif ($jenis==3){
			return intval(str_replace(',','',$value));
		}
	}

	public function formatMinus($nilai)
	{
		if ($nilai > 0) {
			return $this->numberFormat($nilai);
		} else if ($nilai == 0) {
			return "-";
		} else {
			$nilai = substr($nilai, 1, strlen($nilai));
			return '(' . $this->numberFormat($nilai) . ')';
		}
	}

}
