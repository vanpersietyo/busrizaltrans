<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $data = array(
            'template' 	=> 'Blog/blog',
            'title' 	=> 'Blog'
        );
        $this->load->view('template/layout',$data);
    }

}

/* End of file Blog.php */
