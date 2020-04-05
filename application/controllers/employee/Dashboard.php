<?php

class Dashboard extends Employee_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_emp()) {
            redirect('employee/Signin', 'refresh');
        }
    }
    
    public function index(){        
        $this->load->view('employee/dashboard');
    }
}
