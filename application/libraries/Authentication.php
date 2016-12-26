<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication
{
    protected $CI;
    private $errors = array();
    $redis = new Predis\Client('redis://h:pb4714986433f567033f960e418d8a74c35ab0394c33288b6ab722a886df5ef7e@ec2-176-34-114-19.eu-west-1.compute.amazonaws.com:16769');

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Auth_Model');
        $this->CI->load->driver('cache');
    }

    public function login($username, $password)
    {
        $password = md5($password);
        $result = $this->CI->Auth_Model->login($username, $password);
        if ($result != null && is_array($result))
        {
            // $this->CI->session->set_userdata($result);
            $redis->set('username', $username);

            // $this->CI->cache->redis->save('username', $username, 10);
            return true;
        }
        else
        {
            $this->errors[] = "User name / password is invalid.";
            return false;
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('username');
        $this->CI->session->sess_destroy();
        return TRUE;
    }

    public function user($username = NULL)
    {
        //if no id was passed use the current users id
        // $username || $username = $this->CI->session->userdata('username');
        $username || $username = $redis->set('username', $username);
        $user = $this->CI->Auth_Model->user($username);
        return (object)$user;
    }

    public function logged_in()
    {
        // echo $this->CI->session->userdata('username');
        // return true;
        // return (bool) $this->CI->session->userdata('username');
        return (bool) $redis->get('username', $username);
    }

    public function errors()
    {
        return implode("<br/>", $this->errors);
    }
}
