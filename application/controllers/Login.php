<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 01/06/2017
 * Time: 13:56
 */
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model','login');
    }

	public function index()
	{

        if ($this->login->hasloged())
        {
        	redirect('admin/index','refresh');
        }
		$this->load->view('login/index');
	}

	public function login()
	{

        if ($this->login->hasloged())
        {
        	redirect('admin/index','refresh');
        }
		if ($this->login->login($_POST['user'],$_POST['senha']))
		{
			redirect('admin/index','refresh');
		}
		else
		{
			echo "Error: usuário ou senha incorretos";
		}
	}

	public function logout()
	{
		$this->login->logout();
		redirect('login/index','refresh');
	}
}