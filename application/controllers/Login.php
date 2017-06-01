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
    }

	public function index()
	{
		$this->load->view('login/index');
	}

}