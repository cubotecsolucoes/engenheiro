<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 31/05/2017
 * Time: 00:37
 */
class Portfolio_model extends CI_Model {

    private $id;
    private $title;
    private $subtitle;
    private $description;
    private $img;

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
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
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
     * @return boolean
     */
    public function add()
    {
        $object = [
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'description' => $this->getDescription(),
            'img' => $this->getImg(),
        ];
        return $this->db->insert('portfolio',$object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('portfolio');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'description' => $this->getDescription(),
            'img' => $this->getImg(),
        ];
        $this->db->where('id',$id);
        $this->db->from('portfolio');
        return $this->db->update($object);
    }

    public function getPortfolioList()
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        return $this->db->get()->result_array();
    }

}