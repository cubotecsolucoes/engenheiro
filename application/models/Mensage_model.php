<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensage_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getTitle()
	{
		$this->db->select('title');
		return $this->db->get('mensage')->result_array()[0]['title'];
	}

	public function getSubtitle()
	{
		$this->db->select('subtitle');
		return $this->db->get('mensage')->result_array()[0]['subtitle'];
	}

	public function setTitle($value)
	{
		$object = [
			'title' => $value
		];
		$this->db->update('mensage', $object);
	}

	public function setSubtitle($value)
	{
		$object = [
			'subtitle' => $value
		];
		$this->db->update('mensage', $object);
	}

}

/* End of file Mensage_model.php */
/* Location: ./application/models/Mensage_model.php */