<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Logout extends Employee_Controller {

    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_emp()) {
            redirect('employee/Signin', 'refresh');
        }
    }

    public function index() {
        $this->session->sess_destroy();
        redirect('employee/signin', 'refresh');
    }

}
