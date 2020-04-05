<?php

class Help_Profile extends Employee_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_emp()) {
            redirect('employee/Signin', 'refresh');
        }
    }
    
    public function index(){
        $this->load->view('employee/help_profile');
    }
    
}