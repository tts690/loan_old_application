<?php

class Dashboard extends DSA_Controller{
    
    public function __construct() {
        parent::__construct();
	if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
    }
    
    public function index(){
        $this->load->view('dsa/dashboard');
    }
}
