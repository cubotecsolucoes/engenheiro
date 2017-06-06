<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model','user');
	}



    /**
     * Gets the value of user.
     *
     * @return mixed
     */
    private function getUser()
    {
        return $this->user->getUser();
    }

    /**
     * Sets the value of user.
     *
     * @param mixed $user the user
     *
     * @return self
     */
    private function setUser($user)
    {
        $this->user->setUser($user);

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    private function getPassword()
    {
        return $this->user->getPassword();
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    private function setPassword($password)
    {
        $this->user->setPassword($password);

        return $this;
    }


    public function login($user,$pass)
    {
    	$this->setUser($user);
    	$this->setPassword($pass);

    	if ($this->user->isUser()) 
    	{
    		$data = [
    			'logado' => true,
    			'name' => $this->user->getName(),
    			'office' => $this->user->getOffice(),
    			'user' => $this->user->getUser(),
    			'token' => $this->user->getToken(),
    			'access' => $this->user->getAccess(),
    			'last_login' => $this->user->getLastLogin(),
    		];
    		
    		$this->session->set_userdata( $data );
    		$this->user->updateLastLogin();
    		return true;
    	}
    	else
    	{
    		$this->session->set_userdata('logado', false);
    		return false;
    	}
    }

    public function logout()
    {
    	$this->session->unset_userdata('logado');
    }

    public function hasLoged()
    {
    	if ($this->session->userdata('logado'))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function getUserLoged()
    {
    	return $this->session->userdata('user');
    }

    public function getTokenLoged()
    {
    	return $this->session->userdata('token');
    }
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */