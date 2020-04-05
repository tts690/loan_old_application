<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Logout extends DSA_Controller {

    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
    }

    public function index() {
        $this->session->sess_destroy();
        redirect('dsa/signin', 'refresh');
    }

}
