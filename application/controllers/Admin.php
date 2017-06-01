<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->template->set('title','Página de Admin');
        $this->template->set('user_name','Everton Carlos');
        $this->template->set('user_office','Developer');
        $this->template->set('user_last_login','12/02/2018');
    }

	public function index()
	{
	    $data = [
            'config_msg' => 'Teste',
        ];

	    $this->template->load('admin/template','admin/index',$data);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */