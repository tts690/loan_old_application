<?php

class Help_Profile extends Admin_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }
    
    public function index(){
        $this->load->view('admin/help_profile');
    }
    
}