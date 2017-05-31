<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 31/05/2017
 * Time: 00:48
 */
class Menus_model extends CI_Model {

    private $id;
    private $menu;
    private $link;

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
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param mixed $menu
     */
    public function setMenu(string $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }

    /**
     * @return boolean
     */
    public function add()
    {
        $object = [
            'menu' => $this->getName(),
            'link' => $this->getImg(),
        ];
        return $this->db->insert('menus',$object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('menus');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'menu' => $this->getName(),
            'link' => $this->getImg(),
        ];
        $this->db->where('id',$id);
        $this->db->from('menus');
        return $this->db->update($object);
    }

    public function getMenuList()
    {
        $this->db->select('*');
        $this->db->from('menus');
        return $this->db->get()->result_array();
    }



}