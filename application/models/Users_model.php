<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 30/05/2017
 * Time: 22:20
 */
class Users_model extends CI_Model
{

    private $id;
    private $user;
    private $password;

    /**
     * Users_model constructor.
     */
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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }


    /**
     * @return boolean
     */
    public function add()
    {
        $object = [
            'user' => $this->getUser(),
            'password' => $this->getPassword(),
        ];
        return $this->db->insert('users',$object);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function update(int $id)
    {
        $object = [
            'user' => $this->getUser(),
            'password' => $this->getPassword(),
        ];
        $this->db->where('id',$id);
        $this->db->from('users');
        return $this->db->update($object);
    }


    /**
     * @param int id
     * @return array
     */
    public function getUserById(int $id)
    {
        $this->db->where('id',$id);
        return $this->db->get('users')->result_array();
    }

}