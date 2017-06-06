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
    private $name;
    private $office;
    private $user;
    private $password;
    private $access;
    private $token;
    private $last_login;

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
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $id
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
     * @param mixed $id
     */
    public function setOffice(string $office)
    {
        $this->office = $office;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = md5($token . date('h:i:s'));
    }

    /**
     * @param mixed $token
     */
    public function setAccess($access)
    {
        $this->access = $access;
    }

    /**
     * @param int $access
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param mixed $token
     */
    public function setLastLogin($date)
    {
        $this->last_login = $date;
    }

    /**
     * @param int $access
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }


    /**
     * @return boolean
     */
    public function add()
    {
        $object = [
            'name' => $this->getName(),
            'office' => $this->getOffice(),
            'user' => $this->getUser(),
            'password' => $this->getPassword(),
            'token' => $this->getToken(),
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

    /**
     * Return is a valid user or not.
     * @return bool
     */
    public function isUser()
    {
        $this->db->select('*');
        $this->db->where('user', $this->getUser());
        $this->db->where('password', $this->getPassword());

        $result = $this->db->get('users')->result_array();

        if (!empty($result))
        {
            $this->setId($result[0]['id']);
            $this->setName($result[0]['name']);
            $this->setOffice($result[0]['office']);
            $this->setAccess($result[0]['access']);
            $this->setToken($result[0]['token']);
            $this->setLastLogin($result[0]['last_login']);
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Return is a valid token and is admin.
     * @param $token
     * @return bool
     */
    public function isValidToken($token)
    {
        $this->db->select('access');
        $this->db->where('token', $token);

        $result = $this->db->get('users')->result_array();

        if (empty($result) or $result[0]['access'] == 1)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function updateLastLogin()
    {
        $data = [
            'last_login' => Date('Y-m-d'),
        ];

        $this->db->where('id', $this->getId());
        $this->db->update('users',$data);
    }

}