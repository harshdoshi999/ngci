<?php defined('BASEPATH') OR exit('No direct script access allowed');

/** This can be removed if you use __autoload() in config.php OR use Modular Extensions */
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    /************
    | Login API |
    *************/

    function login_post()
    {
        /** Update the token */
        $message = array("error" => 0,"message" =>"You have logged in successfully!","email" => $this->post('email'),"password" => $this->post('password'));
        $this->response($message, 200); // 200 being the HTTP response code for success
    }
}