<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 31/05/2017
 * Time: 00:51
 */
class Abouts_model extends CI_Model
{

    private $id;
    private $img;
    private $year;
    private $title;
    private $description;

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
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }



    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear(string $year)
    {
        $this->year = $year;
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
     * @return boolean
     */
    public function add()
    {
        $object = [
            'img' => $this->getImg(),
            'year' => $this->getYear(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
        return $this->db->insert('abouts', $object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('abouts');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'img' => $this->getImg(),
            'year' => $this->getYear(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
        $this->db->where('id', $id);
        $this->db->from('abouts');
        return $this->db->update($object);
    }

    public function getAboutList()
    {
        $this->db->select('*');
        $this->db->from('abouts');
        return $this->db->get()->result_array();
    }
}