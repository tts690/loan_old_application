<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Dashboard extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/dashboard');
    }

}
