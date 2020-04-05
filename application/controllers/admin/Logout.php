<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Logout extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->session->sess_destroy();
        redirect('admin/signin', 'refresh');
    }

}
