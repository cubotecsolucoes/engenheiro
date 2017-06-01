<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
	    $this->load->model('menus_model','menu');
	    $this->load->model('services_model','service');
	    $this->load->model('portfolio_model','portfolio');
	    $this->load->model('abouts_model','about');
	    $this->load->model('team_model','team');
	    $this->load->model('partners_model','partners');

	    $data = [
	        'menus' => $this->menu->getMenuList(),
            'services' => $this->service->getServiceList(),
            'portfolios' => $this->portfolio->getPortfolioList(),
            'abouts' => $this->about->getAboutList(),
            'teams' => $this->team->getTeamList(),
            'partners' => $this->partners->getPartnersList(),
        ];
		$this->load->view('home/index',$data);
	}
}
