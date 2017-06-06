<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 31/05/2017
 * Time: 00:44
 */
class Partners_model extends CI_Model {

    private $id;
    private $name;
    private $img;
    private $url;

	public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg(string $img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return boolean
     */
    public function add()
    {
        $object = [
            'name' => $this->getName(),
            'img' => $this->getImg(),
            'url' => $this->getUrl(),
        ];
        return $this->db->insert('partners',$object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('partners');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'name' => $this->getName(),
            'img' => $this->getImg(),
            'url' => $this->getUrl(),
        ];
        $this->db->where('id',$id);
        $this->db->from('partners');
        return $this->db->update($object);
    }

    public function getPartnersList()
    {
        $this->db->select('*');
        $this->db->from('partners');
        return $this->db->get()->result_array();
    }

    public function count()
    {
        $tabela = "partners";
        $result = $this->db->query("SELECT COUNT(*) as count FROM $tabela")->result_array();
        return $result[0]['count'];
    }
}