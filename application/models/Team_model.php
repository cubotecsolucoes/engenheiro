<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 30/05/2017
 * Time: 22:20
 */
class Team_model extends CI_Model {

    private $id;
    private $img;
    private $name;
    private $office;
    private $twitter;
    private $face;
    private $linkedin;


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
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getTitle()
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
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param mixed $office
     */
    public function setOffice(string $office)
    {
        $this->office = $office;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter(string $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * @param mixed $face
     */
    public function setFace(string $face)
    {
        $this->face = $face;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param mixed $linkedin
     */
    public function setLinkedin(string $linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @return boolean
     */
    public function add()
    {
        $object = [
            'img' => $this->getImg(),
            'name' => $this->getName(),
            'office' => $this->getOffice(),
            'twitter' => $this->getTwitter(),
            'face' => $this->getFace(),
            'linkedin' => $this->getLinkedin(),
        ];
        return $this->db->insert('team',$object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('team');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'img' => $this->getImg(),
            'name' => $this->getName(),
            'office' => $this->getOffice(),
            'twitter' => $this->getTwitter(),
            'face' => $this->getFace(),
            'linkedin' => $this->getLinkedin(),
        ];
        $this->db->where('id',$id);
        $this->db->from('team');
        return $this->db->update($object);
    }

    public function getTeamList()
    {
        $this->db->select('*');
        $this->db->from('team');
        return $this->db->get()->result_array();
    }

    public function count()
    {
        $tabela = "team";
        $result = $this->db->query("SELECT COUNT(*) as count FROM $tabela")->result_array();
        return $result[0]['count'];
    }

}