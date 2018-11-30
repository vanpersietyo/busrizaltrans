<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
| ------------------------------------------------------------------- 
| EMAIL CONFING 
| ------------------------------------------------------------------- 
| Configuration of outgoing mail server. 
| */
$config['protocol'] 	= 'smtp';
$config['smtp_host'] 	= 'ssl://rizaltrans.adhityaelenwedding.com';  
$config['smtp_port'] 	= 465;  
$config['smtp_timeout'] = '300';  
$config['smtp_user'] 	= 'admin@rizaltrans.adhityaelenwedding.com';  
$config['smtp_pass'] 	= 'rizaltrans';
$config['charset'] 		= 'utf-8';
$config['mailtype'] 	= 'html';
$config['wordwrap'] 	= TRUE;
$config['newline'] 		= "\r\n";
/* End of file email.php */  
/* Location: ./system/application/config/email.php */