<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->template->set('title','Página de Admin');
        $this->template->set('user_name', $this->session->userdata('name'));
        $this->template->set('user_office', $this->session->userdata('office'));
        $this->template->set('user_last_login', $this->session->userdata('last_login'));
    }

	public function index()
	{
        $this->load->model('Mensage_model','mensage');
	    $data = [
            'config_title' => $this->mensage->getTitle(),
            'config_subtitle' => $this->mensage->getSubtitle(),
        ];

	    $this->template->load('admin/template','admin/index',$data);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */